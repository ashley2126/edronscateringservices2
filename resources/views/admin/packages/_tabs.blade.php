<div class="edit-tabs">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#package-courses" aria-controls="package-courses" role="tab" data-toggle="tab">Package Courses</a></li>
    <li role="presentation"><a href="#package-rules" aria-controls="package-rules" role="tab" data-toggle="tab">Package Rules</a></li>
    <li role="presentation"><a href="#menu-items" aria-controls="menu-items" role="tab" data-toggle="tab">Menu Items</a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="package-courses">

        @include('admin.packages.partials.title-section',['title' => 'Package Courses', 'showAction' => true,'target' => '#package-courses-modal'])

        <div class="package_courses">
           @include('admin.packages._package_courses_table',[
                    'package_courses' => $package_courses,
            ])

            @include('admin.packages.modals.package_courses')
        </div>

    </div>
    <div role="tabpanel" class="tab-pane" id="package-rules">...</div>
    <div role="tabpanel" class="tab-pane" id="menu-items">...</div>
  </div>
</div>