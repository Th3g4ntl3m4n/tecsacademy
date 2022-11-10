@extends('dashboard.dashboardTemplate')

@section('content')

<!-- Page Content -->

<div class="page-section border-bottom-2">
                    <div class="container page__container">
                    <form action="{{ route('createNewCourse')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">

                                <div class="page-separator">
                                    <div class="page-separator__text">Basic information</div>
                                </div>

                                <label class="form-label">Course title</label>
                                <div class="form-group mb-24pt">
                                <label class="form-label">Type</label>
                                            <select name="type"
                                                    class="form-control custom-select">
                                                <option value="1">TecsIntro</option>
                                                <option value="2"></option>                                                
                                </select>
                                </div>

                                <div class="form-group mb-32pt">
                                    <label class="form-label">teacher</label>
                                    <!-- <textarea class="form-control" rows="3" placeholder="Course description"></textarea> -->
                                    <div style="height: 150px;"
                                         class="mb-0"
                                         
                                         data-quill-placeholder="Course description">
                                        <h1>{{ auth()->user()->name}}</h1>                                    
                                        
                                    </div>                                 
                                </div>

                                <div class="page-separator">
                                    <div class="page-separator__text">Settings</div>
                                </div>

                                <label class="form-label">Estado</label>
                                            <select name="estado"
                                                    class="form-control custom-select">
                                                <option value="1">Open</option>
                                                <option value="2">Close</option>                                                
                                </select>
                                <p><br></p>
                                
                                <label class="form-label">Horario</label>
                                            <select name="schedule"
                                                    class="form-control custom-select">
                                                <option value="1">18:00 - 20:00</option>
                                                <option value="2">20:00 - 22:00</option>                                                
                                </select>
                                <p><br></p>
                                <label class="form-label">URL de la clase</label>                                
                                        <input type="text"
                                               name="url"
                                               class="form-control"
                                               value="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0"
                                               placeholder="Enter Video URL">
                                        <small class="form-text text-muted">Enter a valid video URL.</small>
                                <p><br></p>

                                <label class="form-label">Fecha de inicio</label>                                
                                        <input type="date"
                                               name="fecha_inicio"
                                               class="form-control"                                               
                                        <small class="form-text text-muted">Ingrese la fecha de inicio</small>
                                <p><br></p>
                                <label class="form-label">Fecha de final</label>                                
                                        <input type="date"
                                               name="fecha_fin"
                                               class="form-control"                                               
                                        <small class="form-text text-muted">Ingrese la fecha de inicio</small>
                                <p><br></p>

                                <label class="form-label">Tamaño del grupo</label>
                                            <select name="size"
                                                    class="form-control custom-select">
                                                <option value="10">10</option>                                                                                               
                                </select>

                                <div class="accordion js-accordion accordion--boxed mb-24pt"
                                     id="parent">
                                    
                                    
                                    
                                </div>

                               

                            </div>
                            <div class="col-md-4">

                                <div class="card">
                                    <div class="card-header text-center">
                                        <button class="btn btn-danger" type="submit">Guardar Curso<button>
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item d-flex">
                                            <a class="flex"
                                               href="#"><strong>Save Draft</strong></a>
                                            <i class="material-icons text-muted">check</i>
                                        </div>
                                        <div class="list-group-item">
                                            <a href="#"
                                               class="text-danger"><strong>Delete Course</strong></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="page-separator">
                                    <div class="page-separator__text">Video</div>
                                </div>

                                <div class="card">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item"
                                                src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0"
                                                allowfullscreen=""></iframe>
                                    </div>
                                    <!--
                                    <div class="card-body">
                                        <label class="form-label">URL</label>
                                        <input type="text"
                                               class="form-control"
                                               value="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0"
                                               placeholder="Enter Video URL">
                                        <small class="form-text text-muted">Enter a valid video URL.</small>
                                    </div>
                                    -->
                                </div>

                                <div class="page-separator">
                                    <div class="page-separator__text">Options</div>
                                </div>

                                
                            </div>
                        </div>


</form>
                    </div>
                </div>

                <!-- // END Page Content -->

@endsection