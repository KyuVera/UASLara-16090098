@extends('pages.home')

@section('content')
 <!-- Content Wrapper. Contains page content -->
  <section class="content-header">
    <h1>Profile</h1>
    <ol class="breadcrumb">
      <li><a href="movielist"><i class="fa fa-home"></i>Home</a></li>
    </ol>
  </section>

<section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="public/bahan/img/avatar5.png" alt="User profile picture">

              <h3 class="profile-username text-center">Giant Bahari</h3>

              <p class="text-muted text-center">Web Development</p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                D4 - Teknik Informatika, PoliTeknik Harapan Bersama Tegal
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Tegal, Jawa Tengah, Indonesia</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-success">Game Development</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>No Glory Without Effort</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li><a href="#settings" data-toggle="tab"><b>Settings</b></a></li>
            </ul>
            <div class="tab-content">
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Education</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEducation" placeholder="Education">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Location</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputLocation" placeholder="Location">
                    </div>
                  </div>
               
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Notes</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputNotes" placeholder="Notes"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>

  @stop