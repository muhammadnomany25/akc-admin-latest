<?php

namespace App\Observers;

use App\Enums\OrderStatus;
use App\Models\Order;
use App\Models\Technician;
use App\Services\FCMService;
use Illuminate\Support\Facades\App;

class OrderObserver
{

    public function created(Order $order)
    {
        $this->notifyTechnician($order);
    }

    public function updated(Order $order)
    {
        // Check if the 'status' column was changed
        if ($order->isDirty('technician_id')) {
            $this->notifyTechnician($order);
        }
    }

    protected function notifyTechnician(Order $order)
    {
        $oldTechnicianId = $order->getOriginal('technician_id');
        $newTechnicianId = $order->technician_id;
        if (in_array($order->status, [OrderStatus::New, OrderStatus::InProgress, OrderStatus::Duplicated, OrderStatus::Reassigned])) {
            if ($oldTechnicianId != $newTechnicianId) {
                $technician = Technician::find($newTechnicianId);
                if ($technician && $technician->fcm_token) {
                    $fcmService = App::make(FCMService::class);

                    $deviceToken = $technician->fcm_token;
                    $title = 'New Order Assignment';
                    $body = 'You have been assigned a new order';
                    $fcmService->sendNotification($deviceToken, $title, $body);
                }
            }
        }
    }
}
