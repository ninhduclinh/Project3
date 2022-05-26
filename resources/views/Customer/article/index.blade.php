@extends('customer.layout.master')
@section('content')
<style>
	.ellipsis {
	white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    }
	.block-ellipsis {
	display: -webkit-box;
	max-width: 100%;
	height: 90px;
	margin: 0 auto;
	-webkit-line-clamp: 3;
	-webkit-box-orient: vertical;
	overflow: hidden;
	text-overflow: ellipsis;
    }
</style>
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Trang chủ</a></li>
                <li class="active">Bài viết</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Li's Main Blog Page Area -->
<div class="li-main-blog-page pt-60 pb-55">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Main Content Area -->
            <div class="col-lg-12">
                <div class="row li-main-content">
                    @foreach($articles as $article)
                    <div class="col-lg-4 col-md-6">
                        <div class="li-blog-single-item pb-25">
                            <div class="li-blog-banner">
                                <a href="{{route('get.article.detail',$article->id)}}"><img class="img-full" src="{{asset('upload/a_image/'.$article->a_image)}}" alt=""></a>
                            </div>
                            <div class="li-blog-content">
                                <div class="li-blog-details">
                                    <h3 class="li-blog-heading pt-25"><a href="{{route('get.article.detail',$article->id)}}" class="block-ellipsis">{{$article->a_name}}</a></h3>
                                    <div class="li-blog-meta">
                                        <a class="author" href="#"><i class="fa fa-user"></i>{{isset($article->User->name)?$article->User->name:'Admin'}}</a>
                                        <a class="post-time" href="#"><i class="fa fa-calendar"></i> {{$article->created_at}}</a>
                                    </div>
                                    <p>{{$article->a_description}}</p>
                                    <a class="read-more" href="{{route('get.article.detail',$article->id)}}">Xem thêm...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach  
                    <!-- Begin Li's Pagination Area -->
                    <div class="col-lg-12">
                        <div class="li-paginatoin-area text-center pt-25">
                            <div class="row">
                                <div class="col-2 mx-auto">
                                    {{($check_link==1)?$articles->links():''}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Pagination End Here Area -->
                </div>
            </div>
            <!-- Li's Main Content Area End Here -->
        </div>
    </div>
</div>
<!-- Li's Main Blog Page Area End Here -->
@endsection