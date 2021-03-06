<!DOCTYPE html>
 
 <!-- CSS Stylesheet -->
 <link rel="stylesheet" href="{{ URL::asset('css/stylesheet.css') }}">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<script src="https://cdn.tiny.cloud/1/nysryxf61cin9ccahvhi183yivlcmexslayu9e3kbzg6ubpt/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({ selector:'textarea' });</script>


<div class="content">
   <div class="row">
     <div class="col-md-12">
       <div class="card card-user">
         <div class="card-header">
           <h5 class="card-title">Contact Form</h5>
         </div>
        <div class="card-body">
           @if(Session::has('success'))
              <div class="alert alert-success">
        	    {{ Session::get('success') }}
               </div>
           @endif
           
          <form method="post" action="contact-us">
          <ol>
            {{csrf_field()}}
             <div class="row">
               <div class="col-md-12">
                 <div class="form-group">
                   <label class ='label'> Name </label><br></br>
                   <input type="text" class ='input' class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name">
                   @error('name')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
               <br></br>
               <div class="col-md-12">
               <div class="form-group">
                   <label class ='label'> Email </label><br></br>
                   <input type="text" class ='input' class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                   @error('email')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>  
              <br></br> 
             <div class="col-md-12">
                <div class="form-group">
                   <label class ='label'> Phone Number </label><br></br>
                   <input type="text" class ='input' class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone Number" name="phone_number">
                   @error('phone_number')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
              <br></br>
              <div class="col-md-12">
                 <div class="form-group">
                   <label class ='label'> Subject </label><br></br>
                   <input type="text" class ='input' class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" name="subject">
                   @error('subject')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
              <br></br>
              <div class="col-md-12">
                <div class="form-group">
                   <label class ='label'> Message </label><br></br>
                   <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message"></textarea>
                   @error('message')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
             </div>
             <div class="row">
              <div class="update ml-auto mr-auto">
                 <button type="submit" class="btn btn-primary btn-round">Send</button>
               </div>
             </div>
           </ol>  
           </form>
         </div>
       </div>
     </div>
   </div>
</div>
</html>

