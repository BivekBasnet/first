<div class="services_section layout_padding">
    <div class="container">
       <div class="services_section_2">
          <div class="row">
            @foreach($post as $post)
             <div class="col-md-4">
                <h1 class="services_taital">{{ $post->title }}</h1>
                <h4 class="services_text">{{ $post->description }}</h4>
                <div><img src="/postimage/{{ $post->image }}" class="services_img">  </div>
                <p>Post by <b>{{ $post->usertype }}</b></p>
                <div class="btn_main"><a href="#">Read More</a></div>
             </div>
             @endforeach
          </div>
       </div>
    </div>
 </div>
