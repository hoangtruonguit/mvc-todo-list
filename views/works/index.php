<?php require 'views/layouts/top.php' ?>
<div class="container">
    <header>
        <h1><?= $title; ?></h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createWorkModal">Add Work
        </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#calendarModal">Calendar
        </button>
        <br/>
        <br/>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($works as $key => $work) : ?>
                <tr>
                    <th scope="row"><?= $key + 1 ?></th>
                    <td><?= $work->name ?></td>
                    <td><?= $work->status() ?></td>
                    <td><?= $work->start_date ?></td>
                    <td><?= $work->end_date ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Third group">
                            <a href="#" data-toggle="modal" class="edit-work" data-modal="#editWorkModal"
                               data-name="<?= $work->name ?>"
                               data-status="<?= $work->status ?>"
                               data-start-date="<?= $work->start_date ?>"
                               data-end-date="<?= $work->end_date ?>"
                               data-id="<?= $work->id ?>"

                            >
                                <i class="fas fa-edit"></i>
                            </a>
                        </div>
                        <div class="btn-group" role="group" aria-label="Third group">
                            <a href="#" data-id="<?= $work->id ?>"  data-toggle="modal" class="delete-work" data-modal="#deleteWorkModal" >
                                <i class="fas fa-minus-circle"></i>
                            </a>

                        </div>

                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </header>
    <?php require 'views/works/partials/create.php' ?>
    <?php require 'views/works/partials/edit.php' ?>
    <?php require 'views/works/partials/delete.php' ?>
    <?php require 'views/works/partials/calendar.php' ?>
    <?php require 'views/layouts/bottom.php' ?>

    <script type="text/javascript">
        $(function () {
            var ATTRIBUTES = ['name', 'status', 'start-date', 'end-date', 'id'];

            $('.date-picker').datepicker({
                format: 'yyyy-mm-dd ',
                startDate: '0d'
            });
            $('.edit-work,.delete-work').on('click', function (e) {
                var $target = $(e.target.parentNode);
                var modalSelector = $target.data('modal');
                ATTRIBUTES.forEach(function (attributeName) {
                    var $modalAttribute = $(modalSelector + ' .modal-body #' + attributeName);
                    var dataValue = $target.data(attributeName);
                    $modalAttribute.val(dataValue || '');
                });
                 $(modalSelector).modal('show');
            });
            $('#calendar').fullCalendar({
                header: {
                    left: 'month,agendaWeek,agendaDay ',
                    center: 'title',
                    right: ' prevYear,prev,next,nextYear'
                },
                footer: {
                    center: '',
                    right: 'prev,next'
                },
                eventSources: [

                    {
                        url: '/calendar', // use the `url` property

                    }


                ]
            });
        });
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
