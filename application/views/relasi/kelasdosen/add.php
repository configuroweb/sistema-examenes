<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Formulario <?= $judul ?></h3>
        <div class="box-tools pull-right">
            <a href="<?= base_url() ?>kelasdosen" class="btn btn-primary btn-flat btn-sm">
                <i class="fa fa-arrow-left"></i> Cancelar
            </a>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-sm-4">
                <div class="alert bg-purple">
                    <h4><i class="fa fa-info-circle"></i> Información</h4>
                    Si la columna del profesor está vacía, estas son las posibles causas:
                    <br><br>
                    <ol class="pl-4">
                        <li>No ha agregado datos maestros de un disertante (maestro de disertante vacío/ningún dato).</li>
                        <li>Se han agregado profesores, por lo que no necesita agregar más. Solo necesita editar los datos de la clase del profesor.</li>
                    </ol>
                </div>
            </div>
            <div class="col-sm-4">
                <?= form_open('kelasdosen/save', array('id' => 'kelasdosen'), array('method' => 'add')) ?>
                <div class="form-group">
                    <label>Profesor</label>
                    <select name="dosen_id" class="form-control select2" style="width: 100%!important">
                        <option value="" disabled selected></option>
                        <?php foreach ($dosen as $d) : ?>
                            <option value="<?= $d->id_dosen ?>"><?= $d->nama_dosen ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class="help-block text-right"></small>
                </div>
                <div class="form-group">
                    <label>Clase</label>
                    <select id="kelas" multiple="multiple" name="kelas_id[]" class="form-control select2" style="width: 100%!important">
                        <?php foreach ($kelas as $k) : ?>
                            <option value="<?= $k->id_kelas ?>"><?= $k->nama_kelas ?> - <?= $k->nama_jurusan ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class="help-block text-right"></small>
                </div>
                <div class="form-group pull-right">
                    <button type="reset" class="btn btn-flat btn-default">
                        <i class="fa fa-rotate-left"></i> Resetear
                    </button>
                    <button id="submit" type="submit" class="btn btn-flat bg-purple">
                        <i class="fa fa-save"></i> Guardar
                    </button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>assets/dist/js/app/relasi/kelasdosen/add.js"></script>