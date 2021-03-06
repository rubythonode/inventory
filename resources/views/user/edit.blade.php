<?php $permissions = $model->permissions; ?>
@extends('app')

@section('title')
Edit Pengguna - {{ config('app.name') }}
@stop

@section('content')
<div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-narrow">
  @include('include.header')
  @include('include.sidebar')

  <main id="main-container">
    <div class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="block">
            <div class="block-header block-header-default">
              <h3 class="block-title">Tambah Pengguna</h3>
              <div class="block-options">
                <a href="{{ route('user.all') }}" title="Semua Pengguna" class="btn-block-option">
                  <i class="si si-login"></i>
                </a>
              </div>
            </div>

            <div class="block-content">
              <form class="action-form" data-url="{{ route('user.update', ['id' => $model->id]) }}" http-type="patch">
                <div class="form-group row">
                  <div class="col-md-9">
                    <div class="form-material">
                      <label class="css-control css-control-danger css-switch">
                        <input name="is_ban" type="checkbox" class="css-control-input" @if ($model->is_ban) checked="" @endif>
                        <span class="css-control-indicator"></span> Ban?
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-9">
                    <div class="form-material floating">
                      <input type="email" class="form-control" id="inputEmail" disabled="" readonly="" value="{{ $model->email }}">
                      <label for="inputEmail">Email</label>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-9">
                    <div class="form-material floating">
                      <input type="password" class="form-control" id="inputPassword" name="password">
                      <label for="inputPassword">Password Baru</label>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-9">
                    <div class="form-material">
                      <label class="css-control css-control-primary css-switch">
                        <input name="is_user" type="checkbox" class="css-control-input" @if ($permissions['admin.user'] == 1) checked="" @endif>
                        <span class="css-control-indicator"></span> Tambah / Edit Pengguna
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-9">
                    <div class="form-material">
                      <label class="css-control css-control-success css-switch">
                        <input name="is_sales" type="checkbox" class="css-control-input" @if ($permissions['admin.sales'] == 1) checked="" @endif>
                        <span class="css-control-indicator"></span> Penjualan &amp; Piutang
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-9">
                    <div class="form-material">
                      <label class="css-control css-control-warning css-switch">
                        <input name="is_purchase" type="checkbox" class="css-control-input" @if ($permissions['admin.purchase'] == 1) checked="" @endif>
                        <span class="css-control-indicator"></span> Pembelian &amp; Hutang
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-9">
                    <div class="form-material">
                      <label class="css-control css-control-info css-switch">
                        <input name="is_item" type="checkbox" class="css-control-input" @if ($permissions['admin.item'] == 1) checked="" @endif>
                        <span class="css-control-indicator"></span> Item
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-9">
                    <div class="form-material">
                      <label class="css-control css-control-danger css-switch">
                        <input name="is_supplier" type="checkbox" class="css-control-input" @if ($permissions['admin.supplier'] == 1) checked="" @endif>
                        <span class="css-control-indicator"></span> Supplier
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-9">
                    <div class="form-material">
                      <label class="css-control css-control-secondary css-switch">
                        <input name="is_client" type="checkbox" class="css-control-input" @if ($permissions['admin.client'] == 1) checked="" @endif>
                        <span class="css-control-indicator"></span> Klien
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-9">
                    <div class="form-material">
                      <label class="css-control css-control-primary css-switch">
                        <input name="is_expense" type="checkbox" class="css-control-input" @if ($permissions['admin.expense'] == 1) checked="" @endif>
                        <span class="css-control-indicator"></span> Biaya
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-9">
                    <button type="submit" class="ladda-button btn btn-block btn-hero btn-noborder btn-success" data-style="expand-left" data-toggle="click-ripple">
                      Submit
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  @include('include.footer')
</div>
@stop
