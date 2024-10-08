@extends('../admin/layouts.app')

@section('content')
       <!--  Header BreadCrumb -->
       <div class="content-header">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="material-icons">home</i>Home</a></li>
            
            <li class="breadcrumb-item active" aria-current="page">Edit : {{ $testimonial->name }}</li>
          </ol>
        </nav>
        <div class="create-item">
            <a href="/dashboard/testimonials" class="theme-primary-btn btn btn-primary"><i class="material-icons">arrow_back</i>&nbsp;Back to testimonial</a>
           
          
        </div>
    </div>
      <!--  Header BreadCrumb --> 


<div class="card bg-white">
    <div class="card-body mt-5 mb-5">

        <form action="{{ route('adminTestiUpdate', [$testimonial->id]) }}" method="POST">
            @csrf

            <div class="form-group row">
                <div class="col-md-2">Author name</div>
                <div class="col-md-4">
                    <input id="name" type="text" value="{{ $testimonial->name }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value=""  autofocus="">
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                     @endif


                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Author profession</div>
                <div class="col-md-4">
                    <input id="profession" type="text" value="{{ $testimonial->profession }}" class="form-control{{ $errors->has('profession') ? ' is-invalid' : '' }}" name="profession" value=""  autofocus="">
                    @if ($errors->has('profession'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('profession') }}</strong>
                    </span>
                     @endif


                 </div>
            </div>


            <div class="form-group row">
                <div class="col-md-2">Author testimonial info</div>
                <div class="col-md-6">

                    <textarea name="content" style="height: 120px" class="form-control {{ $errors->has('content') ? ' is-invalid' : '' }}">{{ $testimonial->content }}</textarea>
                    @if ($errors->has('content'))
                        <div style="color:red">
                            <p class="mb-0">{{ $errors->first('content') }}</p>
                        </div>
                    @endif
                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Vimeo video id</div>
                <div class="col-md-4">
                    <input id="video_id" type="text" value="{{ $testimonial->video_id }}" class="form-control{{ $errors->has('video_id') ? ' is-invalid' : '' }}" name="video_id" value=""  autofocus="">
                    @if ($errors->has('video_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('video_id') }}</strong>
                    </span>
                     @endif


                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">
                    <label for="status">Status:</label>
                </div>
                <div class="col-md-4">
                    <select name="status" id="status" class="form-control">
                        <option value="1"{{ $testimonial->status=='1' ? 'selected':'' }}>Live</option>
                        <option value="0"{{ $testimonial->status=='0' ? 'selected':'' }}>Draft</option>
                    </select>
                

                 </div>
            </div>




            <div class="form-group pt-2 row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <button class="theme-primary-btn btn btn-success" type="submit">Update testimonial</button>
                   
                 </div>
            </div>

        </form>
  
    </div>
</div>
@endsection
