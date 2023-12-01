<?php 
    $email = $_COOKIE["email"] ;
    $name = $_COOKIE["name"];
?>


<nav class="app__navbar">
        <ul>
            <li>
                <a href="/">
                    <i class="fa-solid fa-house"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="{{route('blog')}}">
                    <i class="fa-solid fa-blog"></i>
                    <span>Blog</span>
                </a>
            </li>
            <li>
                <a href="{{route('readbook')}}">
                    <i class="fa-solid fa-book-open"></i>
                    <span>Books</span>
                </a>
            </li>
            <li>
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-solid fa-circle-question"></i>
                    <span>Help</span>
                </a>
            </li>
        </ul>
        

    </nav>  

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="myModalLabel">We'd Love to Hear From You</h4>
            </div>
            <div class="modal-body">
                <form id="form" method="POST" action="{{ route('feedback') }}" enctype="multipart/form-data" class="form-horizontal col-sm-12">
                @csrf
                    <div class="form-group"><label>E-Mail</label><input name="email" class="form-control email" placeholder="email@you.com (so that we can contact you)" data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)" type="text" value="{{$email}}" readonly></div>
                    <div class="form-group"><label>Name</label><input name="name" class="form-control required" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text" value="{{$name}}" readonly></div>
                    <div class="form-group"><label>Phone</label><input name="numPhone" id="numPhone" class="form-control phone numPhone" required placeholder="999-999-9999" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number (999-999-9999)" type="text"></div>
                    <div class="form-group"><label>Message</label><textarea name="message" id="message" class="form-control required message" placeholder="Your message here.." data-placement="top" data-trigger="manual" required></textarea></div>
                    <div class="form-group"><button type="submit" class="btn btn-success pull-right btn-submit btn-modal-submit " disabled>Send</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn" data-bs-dismiss="modal" aria-hidden="true">Cancel</button>
            </div>
        </div>
    </div>
</div>