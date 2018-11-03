<?php
/**
 * Created by PhpStorm.
 * User: Hoang Truong
 * Date: 02/11/2018
 * Time: 22:19
 */
?>

<div class="modal fade bd-example-modal-lg" id="calendarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg"" role="document">
        <form action="/works" method="post" class="needs-validation" novalidate>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Calendar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="calendar"></div>
                </div>

            </div>
        </form>

    </div>
</div>
