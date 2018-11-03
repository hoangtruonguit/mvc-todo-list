<?php
/**
 * Created by PhpStorm.
 * User: Hoang Truong
 * Date: 02/11/2018
 * Time: 22:19
 */
?>

<div class="modal fade" id="createWorkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="/works" method="post" class="needs-validation" novalidate>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create Model</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please choose a Name.
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Status</label>
                            <select name="status" class="form-control">
                                <option value="1">Planing</option>
                                <option value="2">Doing</option>
                                <option value="3">Completed</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="startDate">Start Date</label>
                            <input type="text" name="start_date" class="form-control date-picker" id="start-date" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please choose a date.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="endDate">End date</label>
                            <input type="text" name="end_date" class="form-control date-picker" id="end-date" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please choose a date.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>

    </div>
</div>
