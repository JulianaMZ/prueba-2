@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Inicio</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Agenda</h3>
                            <div id='calendar'></div>
                            <script>

                                document.addEventListener('DOMContentLoaded', function() {
                                    var calendarEl = document.getElementById('calendar');
                                    var calendar = new FullCalendar.Calendar(calendarEl, {
                                        initialView: 'dayGridMonth',
                                        locale:"es",
                                        headerToolbar:{
                                            left:'prev,next today',
                                            center:'title',
                                            right:'dayGridMonth, timeGridWeek, timeGridDay'
                                        }
                                    });
                                    calendar.render();
                                });

                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection