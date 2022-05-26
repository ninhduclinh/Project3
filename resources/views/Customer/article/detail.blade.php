@extends('customer.layout.master')\
@section('content')
<style>

    .article_content img{
        position: relative;
		left: 50%;
		transform: translateX(-50%);
	}
</style>
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Trang chủ</a></li>
                <li><a href="{{route('article.index')}}">Bài viết</a></li>
                <li class="active">{{$article->a_name}}</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Li's Main Blog Page Area -->
<div class="li-main-blog-page li-main-blog-details-page pt-60 pb-60 pb-sm-45 pb-xs-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Blog Sidebar Area -->
            <div class="col-lg-3 order-lg-2 order-2">
                <h4><u><center>Các tin tức khác: </center></u></h4>
                @foreach($articles as $artic)
                <div style="margin-top: 20px"><a href="{{route('get.article.detail',$artic->id)}}">➤ <b>{{$artic->a_name}}</b></a></div>
                @endforeach
            </div>
            <!-- Li's Blog Sidebar Area End Here -->
            <!-- Begin Li's Main Content Area -->
            <div class="col-lg-9 order-lg-1 order-1">
                <div class="row li-main-content">
                    <div class="col-lg-12">
                        <div class="li-blog-single-item pb-30">
                            <div class="li-blog-banner">
                                <a href="blog-details.html"><img class="img-full" src="{{asset('upload/a_image/'.$article->a_image)}}" alt=""></a>
                            </div>
                            <div class="li-blog-content">
                                <div class="li-blog-details">
                                    <h3 class="li-blog-heading pt-25"><a href="#">{{$article->a_name}}</a></h3>
                                    <div class="li-blog-meta">
                                        <a class="author" href="#"><i class="fa fa-user"></i>{{isset($article->User->name)?$article->User->name:'Admin'}}</a>
                                        <a class="post-time" href="#"><i class="fa fa-calendar"></i> {{$article->created_at}}</a>
                                    </div>
                                    <!-- Begin Blog Blockquote Area -->
                                    <div class="li-blog-blockquote">
                                        <blockquote>
                                            <p>{{$article->a_description}}</p>
                                        </blockquote>
                                    </div>
                                    <!-- Blog Blockquote Area End Here -->
                                    <div class="article_content"><p>{!!$article->a_content!!}</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Li's Main Content Area End Here -->
        </div>
    </div>
</div>
<!-- Li's Main Blog Page Area End Here -->
@endsection