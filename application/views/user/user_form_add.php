
<section class="content-header">
      <h1>
        Users
        <small>Pengguna</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Users</a></li>
      </ol>
    </section>


    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Add user</h3>
                <div class="pull-right">
                    <a href="<?= site_url('user')?>" class="btn btn-flat btn-warning"><i class="fa fa-undo"></i> Back</a>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group <?= form_error('fullname') ? 'has-error' : null?>">
                                        <label for="fullname">Name *</label>
                                        <input type="text" name="fullname" value="<?= set_value('fullname')?>" class="form-control" autofocus>
                                        <small class="text-danger"><?= form_error('fullname')?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group <?= form_error('username') ? 'has-error' : null?>">
                                        <label for="username">Username *</label>
                                        <input type="text" name="username" value="<?= set_value('username')?>" class="form-control">
                                        <small class="text-danger"><?= form_error('username')?></small>
                                    </div>
                                </div>
                            </div>    
                            <div class="form-group <?= form_error('password') ? 'has-error' : null?>">
                                <label for="password">Password *</label>
                                <input type="password" name="password" value="<?= set_value('password')?>" class="form-control">
                                <small class="text-danger"><?= form_error('password')?></small>
                            </div>
                            <div class="form-group <?= form_error('passconf') ? 'has-error' : null?>">
                                <label for="passconf">Confirm password</label>
                                <input type="password" name="passconf" value="<?= set_value('passconf')?>" class="form-control">
                                <small class="text-danger"><?= form_error('passconf')?></small>
                            </div>
                            <div class="form-group ">
                                <label>Address</label>
                                <textarea name="address" class="form-control" ><?= set_value('address')?></textarea>
                            </div>
                            <div class="form-group <?= form_error('level') ? 'has-error' : null?>">
                                <label>Level *</label>
                                    <select name="level" class="form-control" >
                                        <option value="">- Pilih -</option>
                                        <option value="1" <?= set_value('level') == '1' ? 'selected' : null?>>Admin</option>
                                        <option value="2" <?= set_value('level') == '2' ? 'selected' : null?> >Kasir</option>
                                    </select>
                                    <small class="text-danger"><?= form_error('level')?></small>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-flat btn-success"><i class="fa fa-paper-plane"></i> Save</button>
                                <button type="reset" class="btn btn-flat "></i> Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
