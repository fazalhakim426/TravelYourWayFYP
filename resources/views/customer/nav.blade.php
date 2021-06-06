<nav class="mb-3">
    <a href="{{route('industry-dashboard')}}" class="item d-flex flex-column align-items-center text-center @if($sub_active == 'dashboard') active @endif">
        <img class="mb-2" src="{{$ASSET}}/front-site/img/dashboard_b.png" alt="">
        <img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/dashboard_y.png" alt="">
        <span>dashboard</span>
    </a>
    <a href="{{route('industry-my-schedule')}}" class="item d-flex flex-column align-items-center text-center @if($sub_active == 'my-schedule') active @endif">
        <img class="mb-2" src="{{$ASSET}}/front-site/img/compliance_b.png" alt="">
        <img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/compliance_y.png" alt="">
        <span>Working hours & shifts</span>
    </a>
    <a href="{{route('industry-schedule')}}" class="item d-flex  flex-column align-items-center text-center @if($sub_active == 'schedule') active @endif">
        <img class="mb-2" src="{{$ASSET}}/front-site/img/appointments_b.png" alt="">
        <img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/appointments_y.png" alt="">
        <span>schedule</span>
    </a>
    <a href="{{route('industry-students')}}" class="item d-flex flex-column align-items-center text-center @if($sub_active == 'students') active @endif">
        <img class="mb-2" src="{{$ASSET}}/front-site/img/students_b.png" alt="">
        <img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/students_y.png" alt="">
        <span>students</span>
    </a>
    <a href="{{route('industry-get-appointments')}}" class="item d-flex  flex-column align-items-center text-center @if($sub_active == 'appointment') active @endif">
        <img class="mb-2" src="{{$ASSET}}/front-site/img/appointments_b.png" alt="">
        <img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/appointments_y.png" alt="">
        <span>appointments</span>
    </a>
    
    
    <a href="{{route('industry-jobs')}}" class="item d-flex flex-column align-items-center text-center @if($sub_active == 'jobs') active @endif">
        <img class="mb-2" src="{{$ASSET}}/front-site/img/job_b.png" alt="">
        <img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/job_y.png" alt="">
        <span>Jobs</span>
    </a>
    <a href="{{route('industry-get-emails')}}" class="item d-flex flex-column align-items-center text-center @if($sub_active == 'email') active @endif">
        @if(count_unread_emails())<span class="badge badge-danger " style="margin-left:50%">{{count_unread_emails()}}</span>@endif
        <img class="mb-2" src="{{$ASSET}}/front-site/img/email_b.png" alt="">
        <img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/email_y.png" alt="">
        <span>Email</span>
    </a>
    
    <a href="{{route('industry-edit-profile')}}" class="item d-flex flex-column align-items-center text-center">
        <img class="mb-2" src="{{$ASSET}}/front-site/img/my_acc_b.png" alt="">
        <img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/my_acc_y.png" alt="">
        <span>my account</span>
    </a>
    <a href="{{route('industry-settings')}}" class="item d-flex flex-column align-items-center text-center">
        <img class="mb-2" src="{{$ASSET}}/front-site/img/setting_b.png" alt="">
        <img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/setting_y.png" alt="">
        <span>Settings</span>
    </a> 
    <a href="{{route('industry-ready-ecl')}}" class="item d-flex flex-column align-items-center text-center @if($sub_active == 'esign') active @endif">
        <img class="mb-2" src="{{$ASSET}}/front-site/img/compliance_b.png" alt="">
        <img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/compliance_y.png" alt="">
        <span>E Signature</span>
    </a>
</nav>