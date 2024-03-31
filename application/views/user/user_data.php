
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
                <h3 class="box-title">Data users</h3>
                <div class="pull-right">
                    <a href="<?= site_url('user/add')?>" class="btn btn-flat btn-primary"><i class="fa fa-user-plus"></i> Create</a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($rows->result() as $key => $data) : ?>
                        <tr>
                            <td><?php echo $key+1 ?></td>
                            <td><?php echo $data->username ?></td>
                            <td><?php echo $data->name ?></td>
                            <td><?php echo $data->address ?></td>
                            <td><?php echo $data->level == '1' ? 'Admin' : 'Kasir' ?></td>
                            <td class="text-center" width="160px">
                            <form action="<?= site_url('user/delete')?>" method="post">
                                <a href="<?= site_url('user/edit/').$data->user_id?>" class="btn btn-flat btn-xs btn-primary"><i class="fa fa-pencil"></i> Update</a>
                                <input type="hidden" name="user_id" value="<?= $data->user_id ?>">
                                <button type="submit" onclick="return confirm('Yakin dihapus?')" class="btn btn-flat btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
