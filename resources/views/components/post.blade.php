@props(['post'=>$post])
<div class="post-container">


    <div class="posts p-3">
        @if (!$post->user->avatar==null)
        <img  class="avatar" src="{{asset($post->user->avatar)}}" alt="avatar">
        @else
        <img  class="avatar" src="{{asset('usersimgs/user.jpg')}}" alt="avatar">
          
        @endif
       
        <div class="post-head">
            <a href="{{route('users.posts',$post->user)}}" class="pr-5">{{$post->user->name}}</a><span>{{$post->created_at->diffForHumans()}}</span>
    
        </div>
        
        <div class="post-body p-3">
            <p>{{$post->body}}</p>
        </div>
    
            <div class="action">
                @auth
                

                    @can('edit', $post)
                            
                    <a class="float-left mx-2" href="{{route('posts.edit',$post)}}">Edit</a>
                    @endcan
                
                    @can('delete', $post)
                        
                    <form class="action-form " action="{{route('posts.destroy',$post)}}" method="post">
    
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                    </form>
                    @endcan


                    
                
                    
                    @if (!$post->likedBy(auth()->user()))
                    <form class="action-form float-left" action="{{route('posts.likes',$post)}}" method="post">
                        @csrf
                        <button type="submit">Like</button>
                    </form>
                        
                    @else
                    <form class="action-form float-left" action="{{route('posts.likes',$post)}}" method="post">
    
                        @csrf
                        @method('delete')
                        <button type="submit">Unlike</button>
                    </form>
                    @endif
    
                    
                @endauth
                <span class="clear-both ">{{$post->likes->count()}} {{Str::plural('Like',$post->likes->count())}}</span>
            </div>
                
        
    
        
    </div>

</div>

    