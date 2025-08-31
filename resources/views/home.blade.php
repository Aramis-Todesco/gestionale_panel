@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
   @php
$heads = [
    'ID',
    'Name',
    ['label' => 'Phone', 'width' => 40],
    ['label' => 'Actions', 'no-export' => true, 'width' => 5],
];

$btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button>';
$btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </button>';
$btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                   <i class="fa fa-lg fa-fw fa-eye"></i>
               </button>';

$config = [
    'data' => [
        [22, 'John Bender', '+02 (123) 123456789', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
        [19, 'Sophia Clemens', '+99 (987) 987654321', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
        [3, 'Peter Sousa', '+69 (555) 12367345243', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
    ],
    'order' => [[1, 'asc']],
    'columns' => [null, null, null, ['orderable' => false]],
];
@endphp

{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="table1" :heads="$heads">
    @foreach($config['data'] as $row)
        <tr>
            @foreach($row as $cell)
                <td>{!! $cell !!}</td>
            @endforeach
        </tr>
    @endforeach
</x-adminlte-datatable>

{{-- Compressed with style options / fill data using the plugin config --}}
<x-adminlte-datatable id="table2" :heads="$heads" head-theme="dark" :config="$config"
    striped hoverable bordered compressed/>

<div class="container">
  <div class="row">
    <div class="col-sm">
      {{-- Minimal --}}
      <x-adminlte-alert>Minimal example</x-adminlte-alert>

      {{-- Minimal with title and dismissable --}}
      <x-adminlte-alert title="Well done!" dismissable>
          Minimal example
      </x-adminlte-alert>

      {{-- Minimal with icon only --}}
      <x-adminlte-alert icon="fas fa-user">
          User has logged in!
      </x-adminlte-alert>
    </div>

    <div class="col-sm">
      {{-- Themes --}}
      <x-adminlte-alert theme="light" title="Tip">
          Light theme alert!
      </x-adminlte-alert>
      <x-adminlte-alert theme="dark" title="Important">
          Dark theme alert!
      </x-adminlte-alert>
      <x-adminlte-alert theme="primary" title="Primary Notification">
          Primary theme alert!
      </x-adminlte-alert>
      <x-adminlte-alert theme="secondary" icon="" title="Secondary Notification">
          Secondary theme alert!
      </x-adminlte-alert>
    </div>

    <div class="col-sm">
      <x-adminlte-alert theme="info" title="Info">
          Info theme alert!
      </x-adminlte-alert>
      <x-adminlte-alert theme="success" title="Success">
          Success theme alert!
      </x-adminlte-alert>
      <x-adminlte-alert theme="warning" title="Warning">
          Warning theme alert!
      </x-adminlte-alert>
      <x-adminlte-alert theme="danger" title="Danger">
          Danger theme alert!
      </x-adminlte-alert>

      {{-- Custom --}}
      <x-adminlte-alert class="bg-teal text-uppercase" icon="fa fa-lg fa-thumbs-up" title="Done" dismissable>
          Your payment was complete!
      </x-adminlte-alert>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm">
      {{-- Minimal --}}
      <x-adminlte-callout>Minimal example</x-adminlte-callout>
    </div>

    <div class="col-sm">
      {{-- Themes --}}
      <x-adminlte-callout theme="info" title="Information">
          Info theme callout!
      </x-adminlte-callout>
      <x-adminlte-callout theme="success" title="Success">
          Success theme callout!
      </x-adminlte-callout>
      <x-adminlte-callout theme="warning" title="Warning">
          Warning theme callout!
      </x-adminlte-callout>
      <x-adminlte-callout theme="danger" title="Danger">
          Danger theme callout!
      </x-adminlte-callout>
    </div>

    <div class="col-sm">
      {{-- Custom --}}
      <x-adminlte-callout theme="success" class="bg-teal" icon="fas fa-lg fa-thumbs-up" title="Done">
          <i class="text-dark">Your payment was complete!</i>
      </x-adminlte-callout>

      <x-adminlte-callout theme="danger" title-class="text-danger text-uppercase"
          icon="fas fa-lg fa-exclamation-circle" title="Payment Error">
          <i>There was an error on the payment procedure!</i>
      </x-adminlte-callout>

      <x-adminlte-callout theme="info" class="bg-gradient-info" title-class="text-bold text-dark"
          icon="fas fa-lg fa-bell text-dark" title="Notification">
          This is a notification.
      </x-adminlte-callout>

      <x-adminlte-callout theme="danger" class="bg-gradient-pink" title-class="text-uppercase"
          icon="fas fa-lg fa-leaf text-purple" title="Observation">
          <i>A styled observation for the user.</i>
      </x-adminlte-callout>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm">
      {{-- Minimal with a title / no body --}}
      <x-adminlte-card title="A card without body"/>

      {{-- Minimal without header / body only --}}
      <x-adminlte-card theme="lime" theme-mode="outline">
          A card without header...
      </x-adminlte-card>

      {{-- Disabled --}}
      <x-adminlte-card title="Disabled Card" theme="teal" disabled>
          A disabled card with teal theme...
      </x-adminlte-card>
    </div>

    <div class="col-sm">
      {{-- Themes --}}
      <x-adminlte-card title="Dark Card" theme="dark" icon="fas fa-lg fa-moon">
          A dark theme card...
      </x-adminlte-card>

      <x-adminlte-card title="Lightblue Card" theme="lightblue" theme-mode="outline"
          icon="fas fa-lg fa-envelope" header-class="text-uppercase rounded-bottom border-info"
          removable>
          A removable card with outline lightblue theme...
      </x-adminlte-card>

      <x-adminlte-card title="Purple Card" theme="purple" icon="fas fa-lg fa-fan" removable collapsible>
          A removable and collapsible card with purple theme...
      </x-adminlte-card>
    </div>

    <div class="col-sm">
      <x-adminlte-card title="Success Card" theme="success" theme-mode="full" icon="fas fa-lg fa-thumbs-up"
          collapsible="collapsed">
          A collapsible card with full success theme and collapsed...
      </x-adminlte-card>

      <x-adminlte-card title="Info Card" theme="info" icon="fas fa-lg fa-bell" collapsible removable maximizable>
          An info theme card with all the tool buttons...
      </x-adminlte-card>

      {{-- Complex / Extra tool / Footer --}}
      <x-adminlte-card title="Form Card" theme="maroon" theme-mode="outline"
          class="elevation-3" body-class="bg-maroon" header-class="bg-light"
          footer-class="bg-maroon border-top rounded border-light"
          icon="fas fa-lg fa-bell" collapsible removable maximizable>
          <x-slot name="toolsSlot">
              <select class="custom-select w-auto form-control-border bg-light">
                  <option>Skin 1</option>
                  <option>Skin 2</option>
                  <option>Skin 3</option>
              </select>
          </x-slot>
          <x-adminlte-input name="User" placeholder="Username"/>
          <x-adminlte-input name="Pass" type="password" placeholder="Password"/>
          <x-slot name="footerSlot">
              <x-adminlte-button class="d-flex ml-auto" theme="light" label="submit"
                  icon="fas fa-sign-in"/>
          </x-slot>
      </x-adminlte-card>
    </div>
  </div>
</div>
<div class="container">
  <div class="row mb-4">
    <div class="col-sm">
      {{-- Minimal with title, text and icon --}}
      <x-adminlte-info-box title="Title" text="some text" icon="far fa-lg fa-star"/>
    </div>

    <div class="col-sm">
      {{-- Themes --}}
      <x-adminlte-info-box title="Views" text="424" icon="fas fa-lg fa-eye text-dark" theme="gradient-teal"/>
      <x-adminlte-info-box title="Downloads" text="1205" icon="fas fa-lg fa-download" icon-theme="purple"/>
      <x-adminlte-info-box title="528" text="User Registrations" icon="fas fa-lg fa-user-plus text-primary"
          theme="gradient-primary" icon-theme="white"/>
    </div>

    <div class="col-sm">
      {{-- Progress / Updatable --}}
      <x-adminlte-info-box title="Tasks" text="75/100" icon="fas fa-lg fa-tasks text-orange" theme="warning"
          icon-theme="dark" progress=75 progress-theme="dark"
          description="75% of the tasks have been completed"/>

      <x-adminlte-info-box title="Reputation" text="0/1000" icon="fas fa-lg fa-medal text-dark"
          theme="danger" id="ibUpdatable" progress=0 progress-theme="teal"
          description="0% reputation completed to reach next level"/>
    </div>
  </div>
</div>
<div class="container">
    <div class="row mb-4">
        <div class="col-sm-6 col-md-4">
            {{-- Minimal with a name --}}
            <x-adminlte-profile-widget name="User Name"/>
        </div>

        <div class="col-sm-6 col-md-4">
            {{-- Theme teal --}}
            <x-adminlte-profile-widget name="John Doe" desc="Administrator" theme="teal"
                img="https://picsum.photos/id/1/100">
                <x-adminlte-profile-col-item title="Followers" text="125" url="#"/>
                <x-adminlte-profile-col-item title="Following" text="243" url="#"/>
                <x-adminlte-profile-col-item title="Posts" text="37" url="#"/>
            </x-adminlte-profile-widget>
        </div>

        <div class="col-sm-6 col-md-4">
            {{-- Theme primary --}}
            <x-adminlte-profile-widget name="Sarah O'Donell" desc="Commercial Manager" theme="primary"
                img="https://picsum.photos/id/1011/100">
                <x-adminlte-profile-col-item class="text-primary border-right" icon="fas fa-lg fa-gift"
                    title="Sales" text="25" size=6 badge="primary"/>
                <x-adminlte-profile-col-item class="text-danger" icon="fas fa-lg fa-users" title="Dependents"
                    text="10" size=6 badge="danger"/>
            </x-adminlte-profile-widget>
        </div>

        <div class="col-sm-6 col-md-4">
            {{-- Theme warning --}}
            <x-adminlte-profile-widget name="Robert Gleeis" desc="Sound Manager" theme="warning"
                img="https://picsum.photos/id/304/100" header-class="text-left" footer-class="bg-gradient-dark">
                <x-adminlte-profile-col-item title="I'm also" text="Artist" size=3
                    class="text-orange border-right border-warning"/>
                <x-adminlte-profile-col-item title="Loves" text="Music" size=6
                    class="text-orange border-right border-warning"/>
                <x-adminlte-profile-col-item title="Like to" text="Travel" size=3
                    class="text-orange"/>
            </x-adminlte-profile-widget>
        </div>

        <div class="col-sm-6 col-md-4">
            {{-- Theme purple --}}
            <x-adminlte-profile-widget name="Alice Viorich" desc="Community Manager" theme="purple"
                img="https://picsum.photos/id/454/100" footer-class="bg-gradient-pink">
                <x-adminlte-profile-col-item icon="fab fa-2x fa-instagram" text="Instagram" badge="purple" size=4/>
                <x-adminlte-profile-col-item icon="fab fa-2x fa-facebook" text="Facebook" badge="purple" size=4/>
                <x-adminlte-profile-col-item icon="fab fa-2x fa-twitter" text="Twitter" badge="purple" size=4/>
            </x-adminlte-profile-widget>
        </div>

        <div class="col-sm-6 col-md-4">
            {{-- Custom --}}
            <x-adminlte-profile-widget class="elevation-4" name="Willian Dubling" desc="Web Developer"
                img="https://picsum.photos/id/177/100" cover="https://picsum.photos/id/541/550/200"
                header-class="text-white text-right" footer-class='bg-gradient-dark'>
                <x-adminlte-profile-row-item title="4+ years of experience with"
                    class="text-center border-bottom border-secondary"/>
                <x-adminlte-profile-col-item title="Javascript" icon="fab fa-2x fa-js text-orange" size=3/>
                <x-adminlte-profile-col-item title="PHP" icon="fab fa-2x fa-php text-orange" size=3/>
                <x-adminlte-profile-col-item title="HTML5" icon="fab fa-2x fa-html5 text-orange" size=3/>
                <x-adminlte-profile-col-item title="CSS3" icon="fab fa-2x fa-css3 text-orange" size=3/>
                <x-adminlte-profile-col-item title="Angular" icon="fab fa-2x fa-angular text-orange" size=4/>
                <x-adminlte-profile-col-item title="Bootstrap" icon="fab fa-2x fa-bootstrap text-orange" size=4/>
                <x-adminlte-profile-col-item title="Laravel" icon="fab fa-2x fa-laravel text-orange" size=4/>
            </x-adminlte-profile-widget>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mb-4">
        <div class="col-sm-6 col-md-4 mb-4">
            {{-- Layout Classic / Minimal --}}
            <x-adminlte-profile-widget name="User Name" layout-type="classic"/>
        </div>

        <div class="col-sm-6 col-md-4 mb-4">
            {{-- Layout Classic / Theme --}}
            <x-adminlte-profile-widget name="John Doe" desc="Administrator" theme="lightblue"
                img="https://picsum.photos/id/1/100" layout-type="classic">
                <x-adminlte-profile-row-item icon="fas fa-fw fa-user-friends" title="Followers" text="125"
                    url="#" badge="teal"/>
                <x-adminlte-profile-row-item icon="fas fa-fw fa-user-friends fa-flip-horizontal" title="Following"
                    text="243" url="#" badge="lightblue"/>
                <x-adminlte-profile-row-item icon="fas fa-fw fa-sticky-note" title="Posts" text="37"
                    url="#" badge="navy"/>
            </x-adminlte-profile-widget>
        </div>

        <div class="col-sm-6 col-md-4 mb-4">
            {{-- Layout Classic / Custom --}}
            <x-adminlte-profile-widget name="Roxana Saziadko" desc="Graphic Designer" class="elevation-4"
                img="https://picsum.photos/id/1027/100" cover="https://picsum.photos/id/130/550/200"
                layout-type="classic" header-class="text-right" footer-class="bg-gradient-teal">
                <x-adminlte-profile-col-item class="border-right text-dark" icon="fas fa-lg fa-tasks"
                    title="Projects Done" text="25" size=6 badge="lime"/>
                <x-adminlte-profile-col-item class="text-dark" icon="fas fa-lg fa-tasks"
                    title="Projects Pending" text="5" size=6 badge="danger"/>
                <x-adminlte-profile-row-item title="Contact me on:" class="text-center text-dark border-bottom"/>
                <x-adminlte-profile-row-item icon="fab fa-fw fa-2x fa-instagram text-dark" title="Instagram"
                    url="#" size=4/>
                <x-adminlte-profile-row-item icon="fab fa-fw fa-2x fa-facebook text-dark" title="Facebook"
                    url="#" size=4/>
                <x-adminlte-profile-row-item icon="fab fa-fw fa-2x fa-twitter text-dark" title="Twitter"
                    url="#" size=4/>
            </x-adminlte-profile-widget>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mb-4">
        <div class="col-sm-6 col-md-3 mb-4">
            {{-- Minimal --}}
            <x-adminlte-small-box title="Title" text="some text" icon="fas fa-star"/>
        </div>

        <div class="col-sm-6 col-md-3 mb-4">
            {{-- Loading --}}
            <x-adminlte-small-box title="Loading" text="Loading data..." icon="fas fa-chart-bar"
                theme="info" url="#" url-text="More info" loading/>
        </div>

        <div class="col-sm-6 col-md-3 mb-4">
            {{-- Theme teal --}}
            <x-adminlte-small-box title="424" text="Views" icon="fas fa-eye text-dark"
                theme="teal" url="#" url-text="View details"/>
        </div>

        <div class="col-sm-6 col-md-3 mb-4">
            {{-- Theme purple --}}
            <x-adminlte-small-box title="Downloads" text="1205" icon="fas fa-download text-white"
                theme="purple"/>
        </div>

        <div class="col-sm-6 col-md-3 mb-4">
            {{-- Theme primary --}}
            <x-adminlte-small-box title="528" text="User Registrations" icon="fas fa-user-plus text-teal"
                theme="primary" url="#" url-text="View all users"/>
        </div>

        <div class="col-sm-6 col-md-3 mb-4">
            {{-- Updatable --}}
            <x-adminlte-small-box title="0" text="Reputation" icon="fas fa-medal text-dark"
                theme="danger" url="#" url-text="Reputation history" id="sbUpdatable"/>
        </div>
    </div>
</div>
<div class="container">
    {{-- Horizontal Progress --}}
    <div class="row mb-4">
        <div class="col-sm-6 col-md-3 mb-3">
            {{-- Minimal --}}
            <x-adminlte-progress/>
        </div>
        <div class="col-sm-6 col-md-3 mb-3">
            <x-adminlte-progress theme="light" value=55/>
        </div>
        <div class="col-sm-6 col-md-3 mb-3">
            <x-adminlte-progress theme="dark" value=30/>
        </div>
        <div class="col-sm-6 col-md-3 mb-3">
            <x-adminlte-progress theme="primary" value=95/>
        </div>
        <div class="col-sm-6 col-md-3 mb-3">
            <x-adminlte-progress theme="secondary" value=40/>
        </div>
        <div class="col-sm-6 col-md-3 mb-3">
            <x-adminlte-progress theme="info" value=85/>
        </div>
        <div class="col-sm-6 col-md-3 mb-3">
            <x-adminlte-progress theme="warning" value=25/>
        </div>
        <div class="col-sm-6 col-md-3 mb-3">
            <x-adminlte-progress theme="danger" value=50/>
        </div>
        <div class="col-sm-6 col-md-3 mb-3">
            <x-adminlte-progress theme="success" value=75/>
        </div>
        <div class="col-sm-6 col-md-3 mb-3">
            <x-adminlte-progress theme="teal" value=75 animated/>
        </div>
        <div class="col-sm-6 col-md-3 mb-3">
            <x-adminlte-progress size="sm" theme="indigo" value=85 animated/>
        </div>
        <div class="col-sm-6 col-md-3 mb-3">
            <x-adminlte-progress theme="pink" value=50 animated with-label/>
        </div>
    </div>

    {{-- Vertical Progress --}}
    <div class="row mb-4 text-center">
        <div class="col-sm-3 mb-3">
            <x-adminlte-progress theme="purple" value=40 vertical/>
        </div>
        <div class="col-sm-3 mb-3">
            <x-adminlte-progress theme="orange" value=80 vertical animated/>
        </div>
        <div class="col-sm-3 mb-3">
            <x-adminlte-progress theme="navy" value=70 vertical striped with-label/>
        </div>
        <div class="col-sm-3 mb-3">
            <x-adminlte-progress theme="lime" size="xxs" value=90 vertical/>
        </div>
    </div>

    {{-- Dinamic Change --}}
    <div class="row">
        <div class="col-sm-6 col-md-3 mb-3">
            <x-adminlte-progress id="pbDinamic" value="5" theme="lightblue" animated with-label/>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mb-4">
        <div class="col-sm-6 col-md-4 mb-3">
            {{-- Minimal --}}
            <x-adminlte-small-box title="Title" text="some text" icon="fas fa-star"/>
        </div>

        <div class="col-sm-6 col-md-4 mb-3">
            {{-- Loading --}}
            <x-adminlte-small-box title="Loading" text="Loading data..." icon="fas fa-chart-bar"
                theme="info" url="#" url-text="More info" loading/>
        </div>

        <div class="col-sm-6 col-md-4 mb-3">
            {{-- Theme teal --}}
            <x-adminlte-small-box title="424" text="Views" icon="fas fa-eye text-dark"
                theme="teal" url="#" url-text="View details"/>
        </div>

        <div class="col-sm-6 col-md-4 mb-3">
            {{-- Theme purple --}}
            <x-adminlte-small-box title="Downloads" text="1205" icon="fas fa-download text-white"
                theme="purple"/>
        </div>

        <div class="col-sm-6 col-md-4 mb-3">
            {{-- Theme primary --}}
            <x-adminlte-small-box title="528" text="User Registrations" icon="fas fa-user-plus text-teal"
                theme="primary" url="#" url-text="View all users"/>
        </div>

        <div class="col-sm-6 col-md-4 mb-3">
            {{-- Updatable --}}
            <x-adminlte-small-box title="0" text="Reputation" icon="fas fa-medal text-dark"
                theme="danger" url="#" url-text="Reputation history" id="sbUpdatable"/>
        </div>
    </div>
</div>

@stop

@push('js')
<script>
$(document).ready(function() {
    let iBox = new _AdminLTE_InfoBox('ibUpdatable');

    let updateIBox = () =>
    {
        // Update data.
        let rep = Math.floor(1000 * Math.random());
        let idx = rep < 100 ? 0 : (rep > 500 ? 2 : 1);
        let progress = Math.round(rep * 100 / 1000);
        let text = rep + '/1000';
        let icon = 'fas fa-lg fa-medal ' + ['text-primary', 'text-light', 'text-warning'][idx];
        let description = progress + '% reputation completed to reach next level';

        let data = {text, icon, description, progress};
        iBox.update(data);
    };

    setInterval(updateIBox, 5000);
})
</script>
@endpush
@push('js')
<script>

    $(document).ready(function() {

        let sBox = new _AdminLTE_SmallBox('sbUpdatable');

        let updateBox = () =>
        {
            // Stop loading animation.
            sBox.toggleLoading();

            // Update data.
            let rep = Math.floor(1000 * Math.random());
            let idx = rep < 100 ? 0 : (rep > 500 ? 2 : 1);
            let text = 'Reputation - ' + ['Basic', 'Silver', 'Gold'][idx];
            let icon = 'fas fa-medal ' + ['text-primary', 'text-light', 'text-warning'][idx];
            let url = ['url1', 'url2', 'url3'][idx];

            let data = {text, title: rep, icon, url};
            sBox.update(data);
        };

        let startUpdateProcedure = () =>
        {
            // Simulate loading procedure.
            sBox.toggleLoading();

            // Wait and update the data.
            setTimeout(updateBox, 2000);
        };

        setInterval(startUpdateProcedure, 10000);
    })

</script>
@endpush

@push('js')
<script>
    $(document).ready(function() {

        let pBar = new _AdminLTE_Progress('pbDinamic');

        let inc = (val) => {
            let v = pBar.getValue() + val;
            return v > 100 ? 0 : v;
        };

        setInterval(() => pBar.setValue(inc(10)), 2000);
    })
</script>
@endpush

@push('js')
<script>

    $(document).ready(function() {

        let sBox = new _AdminLTE_SmallBox('sbUpdatable');

        let updateBox = () =>
        {
            // Stop loading animation.
            sBox.toggleLoading();

            // Update data.
            let rep = Math.floor(1000 * Math.random());
            let idx = rep < 100 ? 0 : (rep > 500 ? 2 : 1);
            let text = 'Reputation - ' + ['Basic', 'Silver', 'Gold'][idx];
            let icon = 'fas fa-medal ' + ['text-primary', 'text-light', 'text-warning'][idx];
            let url = ['url1', 'url2', 'url3'][idx];

            let data = {text, title: rep, icon, url};
            sBox.update(data);
        };

        let startUpdateProcedure = () =>
        {
            // Simulate loading procedure.
            sBox.toggleLoading();

            // Wait and update the data.
            setTimeout(updateBox, 2000);
        };

        setInterval(startUpdateProcedure, 10000);
    })

</script>
@endpush