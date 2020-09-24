<div class="col-lg-4">
    <div class="card profile-card">
        <div class="card-body p-0">
            <div class="media p-3  align-items-center">                                                
                <img src="{{ URL::asset('assets/images/users/'.$image.'.jpg')}}" alt="user" class="rounded-circle thumb-xl">                                        
                <div class="media-body ml-3 align-self-center">
                    <h5 class="pro-title">{{ $title }}</h5>
                    <p class="mb-2 text-muted">{{ $email }}</p>                                 
                </div>
                <div class="action-btn">
                    <a href="" class=""><i class="fas fa-pen text-info mr-2"></i></a>
                    <a href="" class=""><i class="fas fa-trash-alt text-danger"></i></a> 
                </div>                                                                              
            </div>                                    
        </div><!--end card-body-->                 
    </div><!--end card--> 
</div><!--end col-->