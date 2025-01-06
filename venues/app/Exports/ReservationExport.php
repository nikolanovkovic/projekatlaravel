<?php

namespace App\Exports;

use App\Models\Reservation;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReservationExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return collect(Reservation::getAllReservations());
    }

    public function headings(): array
    {
        return ['id', 'user_id', 'venue_id', 'date', 'slot'];
    }
}
