@if($projects_github['code'] == 200)
    <div class="list-group list_projects_github">
        @foreach($projects_github as $p)
            <a href="#" class="list-group-item list-group-item-action item_project_github">
                <div>
                    <span class="title">{{$p['name']}}</span>
                    <span class="description">{{$p['description']}}</span>
                    <br>
                    <span class="language badge badge-info">{{$p['language']}}</span>
                    @if(!empty($p['contributors']))
                        |
                        @foreach($p['contributors'] as $c)
                            <img class="avatar" src="{{$c['avatar_url']}}" alt="{{$c['login']}}" data-toggle="tooltip" data-placement="top" title="{{$c['login']}}">
                        @endforeach
                    @endif
                </div>
                <div>
                    <button class="btn btn-primary btn-sm"><i class="fa fa-upload" aria-hidden="true"></i> Importer</button>
                </div>
            </a>
        @endforeach
    </div>
@else
    Erreur lors de la récupération des projets Github
    @if(!empty($projects_github['message']))
        <br> {{$projects_github['message']}}
    @endif
@endif
