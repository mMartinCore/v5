


          <li class="{{ Request::is('ranks*') ? 'active' : '' }}">
                <a href="{!! route('ranks.index') !!}"><i class="fa fa-edit"></i><span>Rank</span></a>
            </li>

            <li class="{{ Request::is('funeralhomes*') ? 'active' : '' }}">
                <a href="{!! route('funeralhomes.index') !!}"><i class="fa fa-edit"></i><span>Funeral Homes</span></a>
            </li>
            <li class="{{ Request::is('parishes*') ? 'active' : '' }}">
                <a href="{!! route('parishes.index') !!}"><i class="fa fa-edit"></i><span>Parishes</span></a>
            </li>
            <li class="{{ Request::is('divisions*') ? 'active' : '' }}">
                <a href="{!! route('divisions.index') !!}"><i class="fa fa-edit"></i><span>Divisions</span></a>
            </li>

            <li class="{{ Request::is('stations*') ? 'active' : '' }}">
                <a href="{!! route('stations.index') !!}"><i class="fa fa-edit"></i><span>Stations</span></a>
            </li>



            <li class="{{ Request::is('conditions*') ? 'active' : '' }}">
                <a href="{!! route('conditions.index') !!}"><i class="fa fa-edit"></i><span>Conditions</span></a>
            </li>
            <li class="{{ Request::is('manners*') ? 'active' : '' }}">
                <a href="{!! route('manners.index') !!}"><i class="fa fa-edit"></i><span>Manners</span></a>
            </li>
            <li class="{{ Request::is('anatomies*') ? 'active' : '' }}">
                <a href="{!! route('anatomies.index') !!}"><i class="fa fa-edit"></i><span>Anatomies</span></a>
            </li>


