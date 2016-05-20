@extends('admin.layout')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ url('admin/inicio') }}">Início</a></li>
        <li><a href="{{ url('admin/instrutores') }}">Instrutores</a></li>
        <li class="active">Editar</li>
    </ol>

    <div class="card">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#first" data-toggle="tab">Account</a>
            </li>

        </ul>
        <div class="p-a-2 tab-content">
            <div class="tab-pane active" id="first">
                <form action="#" class="form-horizontal">
                    <div class="form-group row">
                        <label for="avatar" class="col-sm-3 form-control-label">Avatar</label>
                        <div class="col-sm-9">
                            <div class="media">
                                <div class="media-left">
                                    <div class="icon-block">
                                        <i class="material-icons text-muted-light md-36">photo</i>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
                                    <label class="file">
                                        <input type="file" id="file">
                                        <span class="file-custom"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 form-control-label">Full Name</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="First Name" value="Adrian">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Last Name" value="Demian">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 form-control-label">Email</label>
                        <div class="col-sm-6 col-md-6">
                            <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
								<i class="material-icons md-18 text-muted">mail</i>
							</span>
                                <input type="text" class="form-control" placeholder="Email Address"
                                       value="contact@mosaicpro.biz" disabled="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="website" class="col-sm-3 form-control-label">Website</label>
                        <div class="col-sm-6 col-md-4">
                            <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2">
								<i class="material-icons md-18 text-muted">language</i>
							</span>
                                <input type="text" class="form-control" placeholder="www." value="learning.themekit.io">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 form-control-label">Change Password</label>
                        <div class="col-sm-6 col-md-4">
                            <div class="input-group">
                    <span class="input-group-addon" id="basic-addon3">
								<i class="material-icons md-18 text-muted">lock</i>
							</span>
                                <input type="text" class="form-control" placeholder="Enter new password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8 col-sm-offset-3">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="btn btn-success btn-rounded">Save Changes</a>
                                </div>
                                <div class="media-body media-middle p-l-1">
                                    <label class="c-input c-checkbox">
                                        <input type="checkbox" checked="">
                                        <span class="c-indicator"></span> Subscribe to Newsletter
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection