<?php

namespace App\DataTables;

use App\Models\AduanIct;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class AduanIctsDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'aduanicts.action')
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(AduanIct $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('aduanicts-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        // Button::make('csv'),
                        // Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('kategori_aduan'),
            Column::make('jenis_aset'),
            Column::make('lokasi_utama_kerosakan'),
            Column::make('lokasi_terperinci_kerosakan'),
            Column::make('nama_pelapor'),
            Column::make('email_pelapor'),
            Column::make('perihal_kerosakan'),
            Column::make('tarikh_laporan'),
            // Column::make('status_pembaikan'),
            Column::make('syor_tindakan'),
            Column::make('nama_peg_aset'),
            Column::make('tarikh_tindakan'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'AduanIcts_' . date('YmdHis');
    }
}
