<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?= $subjudul ?></h3>
        <div class="box-tools pull-right">
            <a href="<?= base_url() ?>ujian/master" class="btn btn-sm btn-flat btn-primary">
                <i class="fa fa-arrow-left"></i> Cancelar
            </a>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-sm-4">
                <div class="alert bg-purple">
                    <h4>Curso <i class="fa fa-book pull-right"></i></h4>
                    <p><?= $matkul->nama_matkul ?></p>
                </div>
                <div class="alert bg-purple">
                    <h4>Profesor <i class="fa fa-address-book-o pull-right"></i></h4>
                    <p><?= $dosen->nama_dosen ?></p>
                </div>
            </div>
            <div class="col-sm-4">
                <?= form_open('ujian/save', array('id' => 'formujian'), array('method' => 'add', 'dosen_id' => $dosen->id_dosen, 'matkul_id' => $matkul->matkul_id)) ?>
                <div class="form-group">
                    <label for="nama_ujian">Nombre de Examen</label>
                    <input autofocus="autofocus" onfocus="this.select()" placeholder="Nombre de Examen" type="text" class="form-control" name="nama_ujian">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="jumlah_soal">Número de Preguntas</label>
                    <input placeholder="Número de Preguntas" type="number" class="form-control" name="jumlah_soal">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="tgl_mulai">Fecha de Inicio</label>
                    <input name="tgl_mulai" type="text" class="datetimepicker form-control" placeholder="Fecha de Inicio">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="tgl_selesai">Fecha de realización</label>
                    <input name="tgl_selesai" type="text" class="datetimepicker form-control" placeholder="Fecha de realización">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="waktu">Hora</label>
                    <input placeholder="en minutos" type="number" class="form-control" name="waktu">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="jenis">Patrón de preguntas</label>
                    <select name="jenis" class="form-control">
                        <option value="" disabled selected>--- Seleccionar ---</option>
                        <option value="Random">Preguntas Aleatorias</option>
                        <option value="Sort">Ordenar Preguntas</option>
                    </select>
                    <small class="help-block"></small>
                </div>
                <div class="form-group pull-right">
                    <button type="reset" class="btn btn-default btn-flat">
                        <i class="fa fa-rotate-left"></i> Resetear
                    </button>
                    <button id="submit" type="submit" class="btn btn-flat bg-purple"><i class="fa fa-save"></i> Guardar</button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>assets/dist/js/app/ujian/add.js"></script>