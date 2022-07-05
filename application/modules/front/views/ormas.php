<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5><i class="fa fa-table"></i> Data Organisasi Masyarakat</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-stripped datatable">
                  <thead>
                    <tr>
                      <th rowspan="2"></th>
                      <th rowspan="2">Nama</th>
                      <th rowspan="2">Bentuk</th>
                      <th rowspan="2">Bidang</th>
                      <th rowspan="2">Tgl. Berlaku STL</th>
                      <th colspan="3" class="text-center">Nama Pengurus</th>
                      <th rowspan="2">Tgl. Berdiri</th>
                      <th rowspan="2">Alamat & Telp</th>
                      <th rowspan="2">Status</th>
                    </tr>
                    <tr>
                      <th>Ketua</th>
                      <th>Sekretaris</th>
                      <th>Bendahara</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if($ormaslist):
                  foreach ($ormaslist as $row):?>
                  <tr>
                    <td><img src="<?=base_url('assets/img/'.$row->lambang);?>" class="img-fluid img-thumbnail" width="50"></td>
                    <td><?=$row->nama_organisasi;?></td>
                    <td><?=$row->bentuk_organisasi;?></td>
                    <td><?=$row->sifat_organisasi;?></td>
                    <td><?=$row->tgl_berlaku;?></td>
                    <td><?=$row->ketua;?></td>
                    <td><?=$row->sekretaris;?></td>
                    <td><?=$row->bendahara;?></td>
                    <td><?=$row->ttp;?></td>
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
