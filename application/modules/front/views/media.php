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
                      <th rowspan="2"></th>
                      <th rowspan="2">Nama Media</th>
                      <th rowspan="2">Nama Perusahaan</th>
                      <th rowspan="2">Website</th>
                      <th rowspan="2">Alamat Perusahaan</th>
                      <th rowspan="2">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if($medialist):
                  foreach ($medialist as $row):?>
                  <tr>
                    <td><img src="<?=base_url('assets/img/'.$row->ktp);?>" class="img-fluid img-thumbnail" width="50"></td>
                    <td><?=$row->nama_media;?></td>
                    <td><?=$row->nama_perusahaan;?></td>
                    <td><?=$row->website;?></td>
                    <td><?=$row->alamat.'<br>'.$row->no_telp;?></td>
                    <td><?=ce_boolean($row->status, '<span class="badge bg-danger">Non-Aktif</span>|<span class="badge bg-success">Aktif</span>').' '.ce_boolean($row->verifikasi, '|<span class="badge bg-success">Terverifikasi</span>');?></td>
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
