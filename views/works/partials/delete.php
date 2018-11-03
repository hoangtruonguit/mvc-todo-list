<?php
/**
 * Created by PhpStorm.
 * User: Hoang Truong
 * Date: 02/11/2018
 * Time: 22:19
 */
?>

<div class="modal fade" id="deleteWorkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="/works/delete"  method="post"  class="needs-validation" novalidate>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p> Are u sure to delete it ?</p>
                    <input type="hidden" name="id" id="id" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="Delete" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </form>

    </div>
</div>
