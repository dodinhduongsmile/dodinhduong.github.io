<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="m-content">
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__body">
            <!--begin: Search Form -->
            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                <div class="row align-items-center">
                    <div class="col-xl-8 order-2 order-xl-1">
                        <div class="form-group m-form__group row align-items-center">
                            <div class="col-md-4">
                                <div class="m-input">
                                    <div class="m-form__control">
                                        <select class="form-control m-bootstrap-select select_searchpdu" name="type_img">
                                            <option value="">
                                                Tất cả
                                            </option>
                                            <option value="banner">
                                                banner
                                            </option>
                                            <option value="news_review">
                                                news_review
                                            </option>
                                            <option value="certify">
                                                shop
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-md-none m--margin-bottom-10"></div>
                            </div>
                            <div class="col-md-8">
                                <div class="m-input-icon m-input-icon--left">
                                    <input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
                                    <span class="m-input-icon__icon m-input-icon__icon--left">
                                        <span>
                                            <i class="la la-search"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                        <?php echo button_admin(['add','delete']) ?>
                        <div class="m-separator m-separator--dashed d-xl-none"></div>
                    </div>
                </div>
            </div>
            <!--end: Search Form -->
            <!--begin: Datatable -->
            <div class="m_datatable" id="ajax_data"></div>
            <!--end: Datatable -->
        </div>
    </div>
</div>

<div class="modal fade" id="modal_form" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="formModalLabel">Form</h3>
            </div>
            <div class="modal-body">
                <?php echo form_open('',['id'=>'','class'=>'m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed m-form--state']) ?>
                <input type="hidden" name="id" value="0">
                <div class="m-portlet--tabs">
                    <div class="m-portlet__body">
                        <div class="tab-content">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Tiêu đề</label>
                                        <input name="title" placeholder="Tiêu đề" class="form-control" type="text" />
                                    </div>
                                    <div class="form-group">
                                        <label>Vị trí</label>
                                        <div class="m-input">
                                            <select class="form-control m-input m-input--square" name="location">
                                                <option value="1" selected="selected">Chính giữa</option>
                                                <option value="2">Bên phải</option>
                                                <option value="3">Bên trái</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái:</label>
                                        <div class="m-input">
                                            <input data-switch="true" type="checkbox" name="is_status" class="switchBootstrap" checked="checked">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Link url</label>
                                        <input name="link_url" placeholder="link url" class="form-control" type="text" />
                                    </div>
                                    <div class="form-group">
                                        <label>kiểu img</label>
                                        <div class="m-input">
                                            <select class="form-control m-input m-input--square" name="type_img">
                                                <option value="banner" selected="selected">banner</option>
                                                <option value="shop">shop</option>
                                                <option value="news_review">news_review</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="thumbnail">Ảnh đại diện</label>
                                        <div class="input-group m-input-group m-input-group--air">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="input_thumbnail">
                                                    <i class="la la-picture-o"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="thumbnail" onclick="FUNC.chooseImage(this)" class="form-control m-input chooseImage" placeholder="Click để chọn ảnh" aria-describedby="input_thumbnail">
                                        </div>
                                        <div class="alert m-alert m-alert--default preview text-center mt-1" role="alert">
                                            <img width="100" height="100" src="<?php echo getImageThumb('',100,100) ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo form_close() ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btnSave">Submit</button>
            </div>
        </div>
    </div>
</div>
