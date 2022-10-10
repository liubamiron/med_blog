@extends('layouts.main')

@section('content')
<body>
<div class="container">

    <div class="row">
        <img src="https://www.freewebheaders.com/wp-content/gallery/healthcare_1/medical-doctor-stethoscope-and-office-sign-web-header.jpg" class="img-fluid" alt="medical care" width="804" height="236">
    </div>

    <div class="row">
        <h2 class="text-center">Serviciile noastre</h2>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia rerum excepturi nisi minus, quae eligendi. Sunt cum aut consectetur odio nihil recusandae? Delectus voluptas esse, ipsa repellat ex optio exercitationem!</p>
    {{-- <div class="row">
        <img src="{{ asset('medblog_1.avif')}}" class="col rounded" alt="medicine" width="100%" height="236">
        <img src="{{ asset('assets/images/medblog_2.avif') }}" class="col rounded" alt="medicine" width="100%" height="236">
        <img src="{{ asset('assets/images/medblog_2.avif') }}" class="col rounded" alt="medicine" width="100%" height="236">
    </div> --}}



    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
            <div class="card shadow-sm">
                <img src="{{asset('assets/images/medblog_1.avif')}}" class="col rounded" alt="Paris" width="100%" height="236">


                <div class="card-body">
                    <p class="card-text">
                    <h5><a href = "#">Îngrijiri comunitare la domiciliu</a></h5>
                    <hr>
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <img src="{{ asset('assets/images/old_pacient.avif') }}" class="col rounded" alt="Paris" width="100%" height="236">
                <div class="card-body">
                    <p class="card-text">
                    <h5><a href = "#">Ingrijiri paliative la domiciliu</a></h5>
                    <hr>
                    Lorem ipsum dolor sit amet voluptatibus sint et dolores laboriosam expedita magni suscipit laborum amet! Ea, quaerat ducimus.
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <img src="{{ asset('assets/images/medblog_4.avif') }}" class="col rounded" alt="Paris" width="100%" height="236">
                <div class="card-body">
                    <p class="card-text">
                    <h5><a href = "#">Pentru pacienti</a></h5>
                    <hr>
                    Tempore doloribus provident aut aliquam nihil quam, ndus ipsam, maxime incidunt culpa natus ipsa voluptates blanditiis odio.
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="row indent_sponsors_label">
    <div class="col ">

        <a href="http://vsa.cnam.gov.md/app/verify/">
            <img src="{{ asset('assets/images/cnam.jpeg') }}"  alt="cnam">
        </a>
    </div>

    <div class="col ">

        <a href="http://vsa.cnam.gov.md/app/verify/">
            <img src="{{ asset('assets/images/alogen.jpeg') }}"  alt="cnam">
        </a>
    </div>

    <div class="col ">

        <a href="http://vsa.cnam.gov.md/app/verify/">
            <img src="{{ asset('assets/images/balti.jpeg') }}"  alt="cnam">
        </a>
    </div>

    <div class="col ">

        <a href="http://vsa.cnam.gov.md/app/verify/">
            <img src="{{ asset('assets/images/col-med.jpeg') }}"  alt="cnam">
        </a>
    </div>

    <div class="col ">

        <a href="http://vsa.cnam.gov.md/app/verify/">
            <img src="{{ asset('assets/images/Emblema_Guvernului_Republicii_Moldova-150x150.jpeg') }}"  alt="cnam">
        </a>
    </div>

</div>


<iframe loading="lazy" src="https://www.google.com/maps/d/embed?mid=1GAEjkQrfH5f9--LrSpLi79urjkzDmNss" width="100%" height="480"></iframe>


</body>
@endsection


