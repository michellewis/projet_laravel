<aside class="right-side">
                <div class="user-head">
                    <h4 class="pull-left">Contacts</h4>
                    <a href="#" class="btn btn-theme04 pull-right">+ Inviter</a>
                </div>
                <table class="table table-borderless">
                    @foreach($users as $user)
                    <tr>
                        <td>
                            <img class="img-circle" src="{{ asset('img/friends/fr-02.jpg')}}" width="32">
                            <a href="{{ route('conversations.show', $user->id) }}">
                            {{ $user->name }} 
                                @if(isset($unread[$user->id]))
                                    <span class="badge badge-pill badge-primary">{{ $unread[$user->id]}}</span>
                                @endif
                             </a>
                        </td>
                        <td>
                            <a href="" type="button" class="btn btn-sm"><i class="fa fa-phone" style="font-size: 12px;"></i></a>
                            <a href="call" class="btn btn-sm"><i class="fa fa-video-camera" style="font-size: 12px;"></i></a>
                            <a href="{{ route('conversations.show', $user->id) }}" class="btn btn-sm"><i class="fa fa-commenting" style="font-size: 12px;"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </aside>