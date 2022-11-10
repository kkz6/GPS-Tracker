<?php declare(strict_types=1);

namespace App\Domains\Device\Controller;

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['user-auth']], static function () {
    Route::get('/device', Index::class)->name('device.index');
    Route::any('/device/create', Create::class)->name('device.create');
    Route::any('/device/{id}', Update::class)->name('device.update');
    Route::any('/device/{id}/device-alarm', UpdateDeviceAlarm::class)->name('device.update.device-alarm');
    Route::any('/device/{id}/device-alarm/create', UpdateDeviceAlarmCreate::class)->name('device.update.device-alarm.create');
    Route::any('/device/{id}/device-alarm/{device_alarm_id}', UpdateDeviceAlarmUpdate::class)->name('device.update.device-alarm.update');
    Route::any('/device/{id}/device-message', UpdateDeviceMessage::class)->name('device.update.device-message');
});
