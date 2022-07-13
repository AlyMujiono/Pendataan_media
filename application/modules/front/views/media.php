<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5><i class="fa fa-table"></i> Data Media</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-stripped datatable">
                  <thead>
                    <tr>
                      <th style="width:10px;">No.</th>
                      <th rowspan="2" style="text-align: center;">Nama Media</th>
                      <th rowspan="2" style="text-align: center;">Nama Perusahaan</th>
                      <th rowspan="2" style="text-align: center;">Website</th>
                      <th rowspan="2" style="text-align: center;">Alamat Perusahaan</th>
                      <th rowspan="2" style="text-align: center;">Tanggal Pendaftaran</th>
                      <th rowspan="2" style="text-align: center;">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if($medialist):
                  foreach ($medialist as $row):?>
                  <tr>
                    <th style="width:10px;"></th>
                    <td><?=$row->nama_media;?></td>
                    <td><?=$row->nama_perusahaan;?></td>
                    <td><?=$row->website;?></td>
                    <td><?=$row->alamat.'<br>telp : '.$row->no_telp;?></td>
                    <td style="text-align: center;"><?=$row->tgl_daftar;?></td>
                    <td style="text-align: center;"><?=ce_boolean($row->status, '<span class="badge bg-danger">Non-Aktif</span>|<span class="badge bg-success">Aktif</span>').' '.ce_boolean($row->verifikasi, '|<span class="badge bg-success">Terverifikasi</span>');?></td>
                  </tr>
                  <?php endforeach;
                  endif;?>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
