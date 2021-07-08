@extends('admin.layouts.master')
@section('title')
    حفاظ
@endsection
@section('content')
    <!-- Content page Start -->
    <div class="content-wrapper pd">
        <section class="content-header">
            <h1>
                <i class="fa fa-arrow-left"></i>
                <span class="semi-bold">الرئيسية</span>
                <small>لوحة التحكم</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i> الرئيسية</a></li>
                <li class="active">لوحة التحكم</li>
            </ol>
        </section>
        <section class="content">

        @if(Auth::guard('admins')->user()->type == 'admin')

            <!--<div class="row">
            <div class="col-md-12">
                <div class="box no-border col-md-3">
                    <div class="tanseeq">
                        <div class="box-header">
                            <h3 class="box-title">الموظفين</h3>
                            <div class="box-tools pull-right"> <a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></a>
                                <a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="box-body">
                            <a href="{{route('admin.teachers')}}"> <i class="fa fa-user-circle-o"></i>
                                <p>عرض بيانات الموظفين</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box no-border col-md-3">
                    <div class="tanseeq">
                        <div class="box-header">
                            <h3 class="box-title">الطلاب</h3>
                            <div class="box-tools pull-right"> <a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></a>
                                <a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="box-body">
                            <a href="{{route('admin.students')}}"> <i class="fa fa-graduation-cap"></i>
                                <p>عرض بيانات الطلاب</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box no-border col-md-3">
                    <div class="tanseeq">
                        <div class="box-header">
                            <h3 class="box-title">أولياء الأمور</h3>
                            <div class="box-tools pull-right"> <a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></a>
                                <a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="box-body">
                            <a href="{{route('admin.guardians')}}"> <i class="fa fa-users"></i>
                                <p>عرض بيانات أولياء الأمور</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box no-border col-md-3">
                    <div class="tanseeq">
                        <div class="box-header">
                            <h3 class="box-title">الدروس</h3>
                            <div class="box-tools pull-right"> <a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></a>
                                <a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="box-body">
                            <a href="{{route('admin.materials')}}"> <i class="fa fa-leanpub"></i>
                                <p>عرض بيانات الدروس</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box no-border col-md-3">
                    <div class="tanseeq">
                        <div class="box-header">
                            <h3 class="box-title">المراكز</h3>
                            <div class="box-tools pull-right"> <a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></a>
                                <a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="box-body">
                            <a href="{{route('admin.centers')}}"> <i class="fa fa-building"></i>
                                <p>عرض بيانات المراكز</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box no-border col-md-3">
                    <div class="tanseeq">
                        <div class="box-header">
                            <h3 class="box-title">المواصلات</h3>
                            <div class="box-tools pull-right"> <a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></a>
                                <a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="box-body">
                            <a href="{{route('admin.transportations')}}"> <i class="fa fa-bus"></i>
                                <p>عرض بيانات المواصلات</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box no-border col-md-3">
                    <div class="tanseeq">
                        <div class="box-header">
                            <h3 class="box-title">الحلقات</h3>
                            <div class="box-tools pull-right"> <a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></a>
                                <a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="box-body">
                            <a href="{{route('admin.courses')}}"> <i class="fa fa-pie-chart"></i>
                                <p>عرض بيانات الحلقات</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box no-border col-md-3">
                    <div class="tanseeq">
                        <div class="box-header">
                            <h3 class="box-title">المستويات</h3>
                            <div class="box-tools pull-right"> <a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></a>
                                <a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="box-body">
                            <a href="{{route('admin.levels')}}"> <i class="fa fa-bar-chart"></i>
                                <p>عرض بيانات المستويات</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="small-box box color-green">
                            <div class="icon"><i class="fas fa-user-circle"></i></div>
                            <div class="box-header">
                                <h3 class="box-title">الموظفين</h3>

                            </div>
                            <div class="widget-stats">
                                <div class="wrap transparents">
                                    <a href="{{route('admin.teachers')}}" class="item-title">بيانات <span>الموظفين</span></a>
                                </div>
                            </div>
                            <div class="widget-stats">
                                <div class="wrap last">
                                    <a href="{{route('admin.teachers.add')}}" class="item-title">اضافة<span>موظف</span></a>
                                </div>
                            </div>
                            <div class="progress dd">
                                <div class="progress-bar" style="width: 50%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="small-box box color-blue">
                            <div class="icon"><i class="fa fa-graduation-cap"></i></div>
                            <div class="box-header">
                                <h3 class="box-title">الطلاب</h3>

                            </div>
                            <div class="widget-stats">
                                <div class="wrap transparents">
                                    <a href="{{route('admin.students')}}" class="item-title">بيانات <span>الطلاب</span></a>
                                </div>
                            </div>
                            <div class="widget-stats">
                                <div class="wrap last">
                                    <a href="{{route('admin.students.add')}}" class="item-title">اضافة <span>طالب</span></a>
                                </div>
                            </div>
                            <div class="progress dd">
                                <div class="progress-bar" style="width: 50%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="small-box box color-purple">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="box-header">
                                <h3 class="box-title">أولياء الأمور</h3>

                            </div>
                            <div class="widget-stats">
                                <div class="wrap transparents">
                                    <a href="{{route('admin.guardians')}}" class="item-title">بيانات <span>أولياء الأمور</span></a>
                                </div>
                            </div>
                            <div class="widget-stats">
                                <div class="wrap last">
                                    <a href="{{route('admin.guardians.add')}}" class="item-title">اضافة <span>ولى أمر</span></a>
                                </div>
                            </div>
                            <div class="progress dd">
                                <div class="progress-bar" style="width: 50%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="small-box box color-red">
                            <div class="icon"><i class="fas fa-file-alt"></i></div>
                            <div class="box-header">
                                <h3 class="box-title">الدروس</h3>
                            </div>
                            <div class="widget-stats">
                                <div class="wrap transparents">
                                    <a href="{{route('admin.materials')}}" class="item-title">بيانات <span>الدروس</span></a>
                                </div>
                            </div>
                            <div class="widget-stats">
                                <div class="wrap last">
                                    <a href="{{route('admin.materials.add')}}" class="item-title">اضافة <span>درس</span></a>
                                </div>
                            </div>
                            <div class="progress dd">
                                <div class="progress-bar" style="width: 50%"></div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->

            <!--<div class="row">
                <div class="col-md-6">
                  <div class="box cases collapsed-box">
                    <div class="box-header">
                      <h3 class="box-title"><i class="fa fa-edit"></i> تسجيل الطالب فى الحلقة</h3>
                      <div class="box-tools pull-right">
                        <a class="btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></a>
                        <a class="btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                      </div>
                    </div>
                    <form class="mtb-15" action="{{route('admin.addnewstudent')}}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                    {{ csrf_field() }}
                    <div class="box-body">
                    <div class="row">
                    <div class="col-md-3">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label>المركز</label>
                        <select class="form-control pmd-select2 select2" id="add_center" name="center_id" >
                            <option></option>

                        </select>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label>الطالب</label>
                        <select class="form-control pmd-select2 select2" id="add_student" name="student_id">
                            <option></option>
                        </select>
                    </div>
                    </div>

                    </div>
                    <div class="row">
                    <div class="col-md-3">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label>الحلقة</label>
                        <select class="form-control pmd-select2 select2" id="add_course" name="course_id">
                            <option></option>


                        </select>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label>المستوى</label>
                        <select class="form-control pmd-select2 select2" id="add_level" name="level_id">
                            <option></option>


                        </select>
                    </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-bordered text-center" id="add_material">
                            <tbody>


                            </tbody>
                    </table>
                    </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-blue addButton pmd-ripple-effect btn-sm">  حفظ</button>
                    </div>
                </div>
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class="box cases collapsed-box">
                <div class="box-header">
                  <h3 class="box-title"><i class="fa fa-edit"></i> تسجيل المدرس فى الحلقة</h3>
                  <div class="box-tools pull-right">
                    <a class="btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></a>
                    <a class="btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                  </div>
                </div>
                <form class="mtb-15" action="{{route('admin.addnewteacher')}}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                    {{ csrf_field() }}
                    <div class="box-body">
                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label>المركز</label>
                        <select class="form-control pmd-select2 select2" id="new_center" name="center_id" >
                            <option></option>
@foreach($centers as $center)
                <option value="{{$center->id}}">{{$center->center_name}}</option>
                                @endforeach
                    </select>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label>المدرس</label>
                    <select class="form-control pmd-select2 select2" id="new_teacher" name="teacher_id">
                        <option></option>
@foreach($teachers as $teacher)
                <option value="{{$teacher->id}}">{{$teacher->teacher_name}}</option>
                                @endforeach
                    </select>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label>الحلقة</label>
                    <select class="form-control pmd-select2 select2" id="new_course" name="course_id">
                        <option></option>
@foreach($courses as $course)
                <option value="{{ $course->id}}">{{ $course->course_name}}</option>
                                @endforeach
                    </select>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label>المستوى</label>
                    <select class="form-control pmd-select2 select2" id="new_level" name="level_id">
                        <option></option>
                    </select>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered text-center" id="new_material">
                        <tbody>
                            <tr>
                                <td>الدرس</td>
                                <td>تحديد</td>
                                <td>ملاحظات</td>
                            </tr>
                        </tbody>
                </table>
                </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-blue addButton pmd-ripple-effect btn-sm">  حفظ</button>
                </div>
            </form>
            </div>
          </div>
        </div>
</div>-->

            <!--<div class="row">
                <div class="col-md-6">
                  <div class="box cases collapsed-box">
                    <div class="box-header">
                      <h3 class="box-title"><i class="fa fa-edit"></i> تسجيل الدرس فى الحلقة</h3>
                      <div class="box-tools pull-right">
                        <a class="btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></a>
                        <a class="btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                      </div>
                    </div>
                    <form class="mtb-15" action="{{route('admin.addcoursematerial')}}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                    {{ csrf_field() }}
                    <div class="box-body">
                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label>المركز</label>
                        <select class="form-control pmd-select2 select2" id="get_new_center" name="center_id" >
                            <option></option>
@foreach($centers as $center)
                <option value="{{$center->id}}">{{$center->center_name}}</option>
                                @endforeach
                    </select>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label>الحلقة</label>
                    <select class="form-control pmd-select2 select2" id="get_new_course" name="course_id">
                        <option></option>
@foreach($courses as $course)
                <option value="{{ $course->id}}">{{ $course->course_name}}</option>
                                @endforeach
                    </select>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label>المستوى</label>
                    <select class="form-control pmd-select2 select2" id="get_new_level" name="level_id">
                        <option></option>
@foreach($levels as $level)
                <option value="{{ $level->id}}">{{ $level->level_name}}</option>
                                @endforeach
                    </select>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered text-center" id="get_new_material">
                        <tbody>
                            <tr>
                                <td>الدرس</td>
                                <td>تحديد</td>
                            </tr>
                        </tbody>
                </table>
                </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-blue addButton pmd-ripple-effect btn-sm">  حفظ</button>
                </div>
            </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box cases collapsed-box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-edit"></i> تسجيل تقييم الطلاب</h3>
              <div class="box-tools pull-right">
                <a class="btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></a>
                <a class="btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
              </div>
            </div>
            <form class="mtb-15" action="{{route('admin.grades.add')}}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                    {{ csrf_field() }}
                    <div class="box-body">
                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label>المركز</label>
                        <select class="form-control pmd-select2 select2" id="center" name="center_id" >
                            <option></option>
@foreach($centers as $center)
                <option value="{{$center->id}}">{{$center->center_name}}</option>
                                @endforeach
                    </select>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label>الطالب</label>
                    <select class="form-control pmd-select2 select2" id="student" name="student_id">
                        <option></option>
@foreach($students as $student)
                <option value="{{$student->id}}">{{$student->student_name}}</option>
                                @endforeach
                    </select>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">


                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label>الدرس</label>
                    <select class="form-control pmd-select2 select2" id="material" name="material_id">
                        <option></option>

@foreach($materials as $material)
                <option value="{{$material->id}}">{{$material->material_name}}</option>
                                @endforeach
                    </select>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label class="control-label">تاريخ التقييم</label>
                        <input name="date" type="text" class="form-control datepicker" value="{{$now->toDateString()}}">
                        </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped table-bordered text-center" id="percent">
                                <tbody>
                                    <tr>
                                        <td>الجزء</td>
                                        <td>الدرجة</td>
                                    </tr>
                                </tbody>
                        </table>
                        </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-blue addButton pmd-ripple-effect btn-sm">  حفظ</button>
                        </div>
                    </form>
                    </div>
                  </div>
                </div>
        </div>-->


            <!--<div class="row">
                <div class="col-md-6">
                  <div class="box cases collapsed-box">
                    <div class="box-header">
                      <h3 class="box-title"><i class="fa fa-edit"></i> تسجيل حضور الطلاب</h3>
                      <div class="box-tools pull-right">
                        <a class="btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></a>
                        <a class="btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                      </div>
                    </div>
                    <form class="mtb-15" action="{{route('admin.absent.add')}}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                    {{ csrf_field() }}
                    <div class="box-body">
                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label>المركز</label>
                        <select class="form-control pmd-select2 select2" id="cent" name="center_id">
                            <option></option>
@foreach($centers as $center)
                <option value="{{$center->id}}">{{$center->center_name}}</option>
                                @endforeach
                    </select>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label>الحلقة</label>
                    <select class="form-control pmd-select2 select2" id="group" name="course_id">
                        <option></option>
                    </select>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label class="control-label">تاريخ التقييم</label>
                        <input name="date" type="text" class="form-control datepicker" value="{{$now->toDateString()}}">
                        </div>
                        </div>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-striped table-bordered text-center">
                                <tbody id="absent">
                                    <tr><td>الطالب</td><td>الحالة</td><td></td></tr>
                                    </tbody>
                                </table>
                        </table>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-blue addButton pmd-ripple-effect btn-sm">  حفظ</button>
                        </div>
                    </form>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box cases collapsed-box">
                    <div class="box-header">
                      <h3 class="box-title"><i class="fa fa-edit"></i> دفع مديونيات الطلاب</h3>
                      <div class="box-tools pull-right">
                        <a class="btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></a>
                        <a class="btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                      </div>
                    </div>
                    <form class="mtb-15" action="{{route('admin.payms.add')}}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                    {{ csrf_field() }}
                    <div class="box-body">
                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label>المركز</label>
                        <select class="form-control pmd-select2 select2" id="center_pay" name="center_id">
                            <option></option>
@foreach($centers as $center)
                <option value="{{$center->id}}">{{$center->center_name}}</option>
                                @endforeach
                    </select>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label>الحلقة</label>
                    <select class="form-control pmd-select2 select2" id="course_pay" name="course_id">
                    <option></option>
@foreach($courses as $course)
                <option value="{{ $course->id}}">{{ $course->course_name}}</option>
                                @endforeach
                    </select>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label>الطالب</label>
                        <select class="form-control pmd-select2 select2" id="student_pay" name="student_id">
                        <option></option>
                    </select>
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label class="control-label">المبلغ</label>
                        <input name="amount" type="number" class="form-control">
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label class="control-label">الخصم</label>
                        <input name="discount" type="number" class="form-control">
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label class="control-label">ملاحظات</label>
                        <input name="notes" type="text" class="form-control">
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                <div class="form-group pmd-textfield pmd-textfield-floating-label" id="price">

                </div>
                <div class="form-group pmd-textfield pmd-textfield-floating-label" id="date">

                </div>
                <div class="form-group pmd-textfield pmd-textfield-floating-label" id="amount">

                </div>
                <div class="form-group pmd-textfield pmd-textfield-floating-label" id="remain">

                </div>
                <div class="form-group pmd-textfield pmd-textfield-floating-label" id="refund">

                </div>
                </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-blue addButton pmd-ripple-effect btn-sm">  حفظ</button>
                </div>
            </form>
            </div>
          </div>
        </div>
</div>-->


            <!--<div class="row">
                <div class="col-md-10 col-md-offset-1">
                  <div class="box cases collapsed-box collapsed-box">
                    <div class="box-header">
                      <h3 class="box-title"><i class="fa fa-edit"></i> تقارير عمليات الدفع</h3>
                      <div class="box-tools pull-right">
                        <a class="btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></a>
                        <a class="btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                      </div>
                    </div>
                        <div class="box-body">
                        <div class="col-md-4">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <label>المركز</label>
                            <select class="form-control pmd-select2 select2" id="center_pays" name="center_id">
                                <option >            </option>
                                @foreach($centers as $center)
                <option value="{{$center->id}}">{{$center->center_name}}</option>
                                @endforeach
                    </select>
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label>الحلقة</label>
                    <select class="form-control pmd-select2 select2" id="course_pays" name="course_id">
                    </select>
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label>الطالب</label>
                        <select class="form-control pmd-select2 select2" id="student_pays" name="student_id">
                    </select>
                </div>
                </div>

                <div class="col-md-4">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label>السنة</label>
                    <select name="year" id="years" class="form-control pmd-select2 select2" data-placeholder="اختر السنة" style="width: 100%; text-align: right;">
                        <option>               </option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2031">2031</option>
                        <option value="2032">2032</option>
                        <option value="2033">2033</option>
                        <option value="2034">2034</option>
                        <option value="2035">2035</option>
                        <option value="2036">2036</option>
                        <option value="2037">2037</option>
                        <option value="2038">2038</option>
                        <option value="2039">2039</option>
                        <option value="2040">2040</option>
                    </select>
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label>الشهر</label>
                    <select name="month" id="month" class="form-control pmd-select2 select2" data-placeholder="اختر الشهر" style="width: 100%; text-align: right;">
                        <option>               </option>
                        <option value="1">يناير</option>
                        <option value="2">فبراير</option>
                        <option value="3">مارس</option>
                        <option value="4">ابريل</option>
                        <option value="5">مايو</option>
                        <option value="6">يونيو</option>
                        <option value="7">يوليو</option>
                        <option value="8">أغسطس</option>
                        <option value="9">سبتمبر</option>
                        <option value="10">أكتوبر</option>
                        <option value="11">نوفمبر</option>
                        <option value="12">ديسمبر</option>
                    </select>
                    <input name="date" type="hidden" class="form-control" style="text-align: right;" value="{{$now->toDateString()}}">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <table class="table table-striped table-bordered text-center">
                                <tbody id="process">
                                    <tr><td>التاريخ</td><td>المبلغ</td></tr>
                                </tbody>
                        </table>
                        </div>
                        </div>
                    </div>
                  </div>
                </div>
        </div> -->

            <!--<div class="row">
                <div class="col-md-12">
                  <div class="box cases collapsed-box">
                    <div class="box-header">
                      <h3 class="box-title"><i class="fa fa-edit"></i> تقارير حضور الطلاب</h3>
                      <div class="box-tools pull-right">
                        <a class="btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></a>
                        <a class="btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                      </div>
                    </div>
                    <div class="box-body">
                    <div class="col-md-3">
                      <div class="form-group pmd-textfield pmd-textfield-floating-label">
                      <label>المركز</label>
                        <select class="form-control pmd-select2 select2" id="cen" name="center_id">
                            <option></option>
                            @foreach($centers as $center)
                <option value="{{$center->id}}">{{$center->center_name}}</option>
                            @endforeach
                    </select>
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group pmd-textfield pmd-textfield-floating-label">
                  <label>الحلقة</label>
                    <select class="form-control pmd-select2 select2" id="groups" name="course_id">
                        <option></option>

@foreach($courses as $course)
                <option value="{{$course->id}}">{{$course->course_name}}</option>
                         @endforeach



                    </select>




                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label class="control-label">من</label>
                        <input id="dfrom" type="date" class="form-control" value="{{$now->toDateString()}}">
                      </div>
                      </div>
                      <div class="col-md-3">
                      <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <label class="control-label">الى</label>
                            <input id="dto" type="date" class="form-control" value="{{$now->toDateString()}}">
                      </div>
                      </div>
                      <div class="col-md-12">
                        <table class="table table-striped table-bordered text-center" id="tables">
                            <tbody id="absents">
                                <tr></tr>
                            </tbody>
                      </table>
                    </div>

                    </div>
                  </div>
                </div>
        </div>-->

                <!--<div class="row">
                <!--        <div class="col-md-12">-->
                <!--          <div class="box cases collapsed-box">-->
                <!--            <div class="box-header">-->
                <!--              <h3 class="box-title"><i class="fa fa-edit"></i> تقارير درجات الطلاب</h3>-->
                <!--              <div class="box-tools pull-right">-->
                <!--                <a class="btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></a>-->
                <!--                <a class="btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>-->
                <!--              </div>-->
                <!--            </div>-->
                <!--            <div class="box-body">-->
                <!--            <div class="col-md-4"> -->
                <!--              <div class="form-group pmd-textfield pmd-textfield-floating-label">-->
                <!--              <label>المركز</label>-->
                <!--                <select class="form-control pmd-select2 select2" id="centers" name="center_id">-->
                <!--                    <option></option>-->
            <!--                    @foreach($centers as $center)-->
            <!--                        <option value="{{$center->id}}">{{$center->center_name}}</option>-->
                <!--                    @endforeach-->
                <!--                </select>-->
                <!--              </div>-->
                <!--              </div>-->
                <!--                <div class="col-md-4"> -->
                <!--              <div class="form-group pmd-textfield pmd-textfield-floating-label">-->
                <!--              <label>الحلقة</label>-->
                <!--                <select class="form-control pmd-select2 select2" id="courses" name="course_id">-->
                <!--                    <option></option>-->
            <!--                      @foreach($courses as $course)-->
            <!--                            <option value="{{ $course->id}}">{{ $course->course_name}}</option>-->
                <!--                        @endforeach-->
                <!--                </select>-->
                <!--              </div>     -->
                <!--              </div>-->
                <!--                <div class="col-md-4">                  -->
                <!--              <div class="form-group pmd-textfield pmd-textfield-floating-label">-->
                <!--              <label>الطالب</label>-->
                <!--                <select class="form-control pmd-select2 select2" id="students" name="student_id">-->
                <!--                    <option></option>-->
                <!--                </select>-->
                <!--              </div>-->
                <!--              </div>-->
                <!--                <div class="col-md-4"> -->
                <!--              <div class="form-group pmd-textfield pmd-textfield-floating-label">-->
                <!--              <label>الدرس</label>-->
                <!--                <select class="form-control pmd-select2 select2" id="materials" name="material_id">-->
                <!--                    <option></option>-->
                <!--                </select>-->
                <!--              </div>-->
                <!--              </div>-->
                <!--                <div class="col-md-4"> -->
                <!--              <div class="form-group pmd-textfield pmd-textfield-floating-label">-->
                <!--                    <label class="control-label">من</label>-->
            <!--                    <input id="from" type="text" class="form-control datepicker" value="{{$now->toDateString()}}">-->
                <!--              </div>-->
                <!--              </div>-->
                <!--                <div class="col-md-4"> -->
                <!--              <div class="form-group pmd-textfield pmd-textfield-floating-label">-->
                <!--                    <label class="control-label">الى</label>-->
            <!--                    <input id="to" type="text" class="form-control datepicker" value="{{$now->toDateString()}}">-->
                <!--              </div>-->

                <!--              </div>-->
                <!--                <div class="col-md-12"> -->
                <!--                <table class="table table-striped table-bordered text-center" id="tables">-->
                <!--                    <thead><tr><th>الدرس</th><th>الدرجة</th><th>التقدير</th><th>التاريخ</th><th>عرض</th></tr></thead>-->
                <!--                    <tbody id="per">-->
                <!--                        <tr>-->

                <!--                        </tr>-->
                <!--                    </tbody>-->
                <!--              </table>-->
                <!--            </div>-->
                <!--            <div class="modal fade" id="modal-default">-->
                <!--            <div class="modal-dialog">-->
                <!--                <div class="modal-content">-->
                <!--                <div class="modal-header">-->
                <!--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                <!--                    <span aria-hidden="true">&times;</span></button>-->
                <!--                    <h4 class="modal-title">تفاصيل الدرس</h4>-->
                <!--                </div>-->
                <!--                <div class="modal-body">-->
                <!--                <div class="table-responsive">-->
                <!--                <table class="table table-striped table-bordered text-center" id="percents">-->
                <!--                    <tbody>-->
                <!--                    <tr>-->
                <!--                        <th>الجزء</th>-->
                <!--                        <th>الدرجة</th>-->
                <!--                    </tr>-->
                <!--                    </tbody>-->
                <!--                </table>-->
                <!--                </div>-->
                <!--                </div>-->
                <!--                <div class="modal-footer">-->
                <!--                    <button type="button" class="btn btn-orange pull-left" data-dismiss="modal">اغلق</button>-->
                <!--                </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            </div>-->
                <!--            </div>-->
                <!--          </div> -->
                <!--        </div>-->
                <!--</div>-->

            <!--<div class="row">
                <div class="col-md-12">
                  <div class="box cases collapsed-box">
                    <div class="box-header">
                      <h3 class="box-title"><i class="fa fa-edit"></i> صرف رواتب الموظفين </h3>
                      <div class="box-tools pull-right">
                        <a class="btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></a>
                        <a class="btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                      </div>
                    </div>
                    <form class="mtb-15" action="{{route('admin.salaries.add')}}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row form-row">
                            <div class="col-md-4">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label>المدرس</label>
                                    <select name="teacher" id="teacher_salary" class="form-control pmd-select2 select2" style="width: 100%; text-align: right;">
                                        <option></option>
@foreach($teachers as $teacher)
                <option value="{{$teacher->id}}">{{$teacher->teacher_name}}</option>
                                            @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label>السنة</label>
                    <select name="year" id="year_salary" class="form-control pmd-select2 select2" style="width: 100%; text-align: right;">
                        <option></option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2031">2031</option>
                        <option value="2032">2032</option>
                        <option value="2033">2033</option>
                        <option value="2034">2034</option>
                        <option value="2035">2035</option>
                        <option value="2036">2036</option>
                        <option value="2037">2037</option>
                        <option value="2038">2038</option>
                        <option value="2039">2039</option>
                        <option value="2040">2040</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label>الشهر</label>
                    <select name="month" id="month_salary" class="form-control pmd-select2 select2" style="width: 100%; text-align: right;">
                        <option></option>
                        <option value="January">يناير</option>
                        <option value="February">فبراير</option>
                        <option value="March">مارس</option>
                        <option value="April">ابريل</option>
                        <option value="May">مايو</option>
                        <option value="June">يونيو</option>
                        <option value="July">يوليو</option>
                        <option value="August">أغسطس</option>
                        <option value="September">سبتمبر</option>
                        <option value="October">أكتوبر</option>
                        <option value="November">نوفمبر</option>
                        <option value="December">ديسمبر</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label class="control-label"> الراتب الأساسى</label>
                    <input name="salary" id="salary" type="number" class="form-control" readonly>
                    <input id="thour" type="hidden">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label class="control-label">عدد ايام الحضور</label>
                    <input name="days" id="days_salary" type="number" class="form-control" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label class="control-label">الخصومات</label>
                    <input name="minus" id="minus_salary" type="number" class="form-control" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label class="control-label">الساعات الاضافية</label>
                    <input name="hours" id="hours_salary" type="number" class="form-control" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label class="control-label">المبلغ الاضافى</label>
                    <input name="bonus" id="bonus_salary" type="number" class="form-control" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label class="control-label">السلف</label>
                    <input name="parts" id="parts_salary" type="number" class="form-control" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="checkbox-inline">تم صرف الراتب ؟</label>
                    <input name="status" class="minimal" type="checkbox" class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <button type="submit" class="btn btn-blue addButton pmd-ripple-effect btn-sm">حفظ</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
</div>
</div>-->

                <div class="row">
                    <div class="col-md-9">
                        <!--Scrollable tab example -->
                        <div class="pmd-card pmd-scrollable pmd-z-depth">
                            <div class="pmd-tabs pmd-tabs-bg" scroll="true">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home-scrollable-0" aria-controls="home0" role="tab" data-toggle="tab">بيانات الطلاب</a></li>
                                    <li role="presentation"><a href="#home-scrollable-1" aria-controls="home1" role="tab" data-toggle="tab"> تسجيل الطالب فى الحلقة</a></li>
                                    <li role="presentation"><a href="#home-scrollable-2" aria-controls="home2" role="tab" data-toggle="tab"> تسجيل المدرس فى الحلقة</a></li>
                                    <li role="presentation"><a href="#home-scrollable-3" aria-controls="home3" role="tab" data-toggle="tab"> تسجيل الدرس فى الحلقة</a></li>
                                    <li role="presentation"><a href="#home-scrollable-4" aria-controls="home4" role="tab" data-toggle="tab"> تسجيل تقييم الطلاب</a></li>
                                    <li role="presentation"><a href="#home-scrollable-5" aria-controls="home5" role="tab" data-toggle="tab"> تسجيل حضور الطلاب</a></li>
                                    <li role="presentation"><a href="#home-scrollable-6" aria-controls="home6" role="tab" data-toggle="tab"> تسجيل مدفوعات الطلاب</a></li>
                                    <li role="presentation"><a href="#home-scrollable-7" aria-controls="home7" role="tab" data-toggle="tab"> تقارير حضور الطلاب</a></li>
                                    <li role="presentation"><a href="#home-scrollable-8" aria-controls="home8" role="tab" data-toggle="tab"> تقارير درجات الطلاب</a></li>
                                    <li role="presentation"><a href="#home-scrollable-9" aria-controls="home9" role="tab" data-toggle="tab"> صرف رواتب الموظفين</a></li>
                                </ul>
                            </div>
                            <div class="pmd-card-body">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home-scrollable-0">
                                        <div class="box-body">
                                            <div class="table-responsive">
                                                <table class="table no-margin">
                                                    <thead>
                                                    <tr>
                                                        <th class="num">#</th>
                                                        <th>الاسم</th>
                                                        <th>السن</th>
                                                        <th>الفصل الدراسي</th>
                                                        <th>المركز</th>
                                                        <th>النوع</th>
                                                        <th>الجنسية</th>
                                                        <th>احصائيات</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($students as $student)
                                                        @if($loop->index <= 7)
                                                            <tr>
                                                                <td class="num">{{$loop->index + 1}}</td>
                                                                <td>{{$student->student_name}}</td>
                                                                <td>{{$student->age}}</td>
                                                                <td>{{$student->season_name}}</td>
                                                                <td>{{$student->center_name}}</td>
                                                                <td>{{$student->gender}}</td>
                                                                <td>{{$student->nationality}}</td>
                                                                <td><div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div></td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        <div class="box-footer clearfix">
                                            <a href="{{route('admin.students')}}" class="btn pmd-ripple-effect btn-sm btn-flat pull-right">  شاهد الكل</a>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="home-scrollable-1">
                                        <form class="mtb-15" action="/admin/addnewstudent" enctype="multipart/form-data" method="post" onsubmit="return false;">
                                            {{ csrf_field() }}
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>المركز</label>
                                                            <select class="form-control pmd-select2 select2" id="add_center" name="center_id" >
                                                                <option></option>
                                                                @foreach(App\Center::all() as $center)
                                                                    <option value="{{$center->id}}">{{$center->center_name}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>الطالب</label>
                                                            <select class="form-control pmd-select2 select2" id="add_student" name="student_id">
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-2">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>  نوع الحلقه  </label>

                                                            <select class="form-control pmd-select2 select2" id="add_type" name="coursetype_id">

                                                                <option></option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>الحلقة</label>
                                                            <select class="form-control pmd-select2 select2" id="add_course" name="course_id">
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-2">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>المستوى</label>
                                                            <select class="form-control pmd-select2 select2" id="level" name="level_id">
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <table class="table table-striped table-bordered text-center" id="add_material">
                                                            <tbody>
                                                            <tr>
                                                                <td>الدرس</td>
                                                                <td>تحديد</td>
                                                                <td>ملاحظات</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-blue addButton pmd-ripple-effect btn-sm">  حفظ</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="home-scrollable-2">
                                        <form class="mtb-15" action="{{route('admin.addnewteacher')}}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                                            {{ csrf_field() }}
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>المركز</label>
                                                            <select class="form-control pmd-select2 select2" id="new_center" name="center_id" >
                                                                <option></option>
                                                                @foreach(App\Center::all() as $center)
                                                                    <option value="{{$center->id}}">{{$center->center_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>المدرس</label>
                                                            <select class="form-control pmd-select2 select2" id="new_teacher" name="teacher_id">
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>  نوع الحلقه  </label>
                                                            <select class="form-control pmd-select2 select2" id="course" name="coursetype_id">
                                                                <option></option>







                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-2">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>الحلقة</label>
                                                            <select class="form-control pmd-select2 select2" id="new_course" name="course_id">
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>




                                                    <div class="col-md-2">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>المستوى</label>
                                                            <select class="form-control pmd-select2 select2" id="newlevel" name="level_id">
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <table class="table table-striped table-bordered text-center" id="new_material">
                                                            <tbody>
                                                            <tr>
                                                                <td>الدرس</td>
                                                                <td>تحديد</td>
                                                                <td>ملاحظات</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-blue addButton pmd-ripple-effect btn-sm">  حفظ</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="home-scrollable-3">
                                        <form class="mtb-15" action="{{route('admin.addcoursematerial')}}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                                            {{ csrf_field() }}
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>المركز</label>
                                                            <select class="form-control pmd-select2 select2" id="get_new_center" name="center_id" >
                                                                <option></option>

                                                                @foreach(App\Center::all() as $center)
                                                                    <option value="{{$center->id}}">{{$center->center_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>  نوع الحلقه  </label>
                                                            <select class="form-control pmd-select2 select2" id="addcourse1" name="coursetype_id">


                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>الحلقة</label>
                                                            <select class="form-control pmd-select2 select2" id="get_new_course" name="course_id">
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>






                                                    <div class="col-md-3">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>المستوى</label>
                                                            <select class="form-control pmd-select2 select2" id="get_new_level1" name="level_id">
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-md-offset-3">
                                                        <table class="table table-striped table-bordered text-center" id="get_new_material1">
                                                            <tbody>
                                                            <tr>
                                                                <td>الدرس</td>
                                                                <td>تحديد</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-blue addButton pmd-ripple-effect btn-sm">  حفظ</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="home-scrollable-4">
                                        <form class="mtb-15" action="{{route('admin.grades.add')}}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                                            {{ csrf_field() }}
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>المركز</label>
                                                            <select class="form-control pmd-select2 select2" id="center" name="center_id" >
                                                                <option></option>
                                                                @foreach(App\Center::all() as $center)
                                                                    <option value="{{$center->id}}">{{$center->center_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>الطالب</label>
                                                            <select class="form-control pmd-select2 select2" id="student" name="student_id">
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>الدرس</label>
                                                            <select class="form-control pmd-select2 select2" id="material" name="material_id">
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label class="control-label">تاريخ التقييم</label>
                                                            <input name="date" type="text" class="form-control datepicker" value="{{$now->toDateString()}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-md-offset-3">
                                                        <table class="table table-striped table-bordered text-center" id="percent">
                                                            <tbody>
                                                            <tr>
                                                                <td>الجزء</td>
                                                                <td>الدرجة</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-blue addButton pmd-ripple-effect btn-sm">  حفظ</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="home-scrollable-5">
                                        <form class="mtb-15" action="{{route('admin.absent.add')}}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                                            {{ csrf_field() }}
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>المركز</label>
                                                            <select class="form-control pmd-select2 select2" id="cent" name="center_id">
                                                                <option></option>
                                                                @foreach(App\Center::all() as $center)
                                                                    <option value="{{$center->id}}">{{$center->center_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>انوع الحلقه  </label>
                                                            <select class="form-control pmd-select2 select2" id="type_group" name="type_id">
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-3">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>الحلقة</label>
                                                            <select class="form-control pmd-select2 select2" id="course_group" name="course_id">
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label class="control-label">تاريخ الحضور</label>
                                                            <input name="date" type="text" class="form-control datepicker" value="{{$now->toDateString()}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-md-offset-3">
                                                    <table class="table table-striped table-bordered text-center">
                                                        <tbody id="absent">
                                                        <tr><td>الطالب</td><td>الحالة</td><td></td></tr>
                                                        </tbody>
                                                    </table>
                                                    </table>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-blue addButton pmd-ripple-effect btn-sm">  حفظ</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="home-scrollable-6">
                                        <form class="mtb-15" action="/admin/pay" enctype="multipart/form-data" method="post" onsubmit="return false;">
                                            {{ csrf_field() }}
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>المركز</label>
                                                            <select class="form-control pmd-select2 select2" id="center_pay" name="center_id">
                                                                <option></option>
                                                                @foreach(App\Center::all() as $center)
                                                                    <option value="{{$center->id}}">{{$center->center_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label> نوع الحلقة</label>
                                                            <select class="form-control pmd-select2 select2" id="course_type" name="type_id">
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>الحلقة</label>
                                                            <select class="form-control pmd-select2 select2" id="course_pay" name="course_id">
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>الطالب</label>
                                                            <select class="form-control pmd-select2 select2" id="student_pay" name="student_id">
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label class="control-label">المبلغ</label>
                                                            <input name="amount" type="number" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label class="control-label">الخصم</label>
                                                            <input name="discount" type="number" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label class="control-label">رقم الايصال</label>
                                                            <input name="code" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label class="control-label">ملاحظات</label>
                                                            <input name="notes" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label" id="price">

                                                        </div>
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label" id="date">

                                                        </div>
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label" id="amount">

                                                        </div>
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label" id="remain">

                                                        </div>
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label" id="refund">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-blue addButton pmd-ripple-effect btn-sm">  حفظ</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="home-scrollable-7">
                                        <div class="box-body">
                                            <div class="col-md-2">
                                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                    <label>المركز</label>
                                                    <select class="form-control pmd-select2 select2" id="cen" name="center_id">
                                                        <option></option>
                                                        @foreach(App\Center::all() as $center)
                                                            <option value="{{$center->id}}">{{$center->center_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                    <label> نوع الحلقة</label>
                                                    <select class="form-control pmd-select2 select2" id="names_type" name="type_id">
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                    <label>الحلقة</label>
                                                    <select class="form-control pmd-select2 select2" id="names_course" name="course_id">
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                    <label class="control-label">من</label>
                                                    <input id="dfrom" type="date" class="form-control" value="{{$now->toDateString()}}">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                    <label class="control-label">الى</label>
                                                    <input id="dto" type="date" class="form-control" value="{{$now->toDateString()}}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <table class="table table-striped table-bordered text-center" id="tables">
                                                    <tbody id="absents">
                                                    <tr></tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="home-scrollable-8">
                                        <div class="box-body">
                                            <div class="col-md-3">
                                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                    <label>المركز</label>
                                                    <select class="form-control pmd-select2 select2" id="centerss" name="center_id">
                                                        <option></option>
                                                        @foreach(App\Center::all() as $center)
                                                            <option value="{{$center->id}}">{{$center->center_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                    <label> نوع الحلقة</label>
                                                    <select class="form-control pmd-select2 select2" id="cour" name="type_id">
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                    <label>الحلقة</label>
                                                    <select class="form-control pmd-select2 select2" id="courses" name="course_id">
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                    <label>الطالب</label>
                                                    <select class="form-control pmd-select2 select2" id="students" name="student_id">
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                    <label>الدرس</label>
                                                    <select class="form-control pmd-select2 select2" id="materials" name="material_id">
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                    <label class="control-label">من</label>
                                                    <input id="from" type="text" class="form-control datepicker" value="{{$now->toDateString()}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                    <label class="control-label">الى</label>
                                                    <input id="to" type="text" class="form-control datepicker" value="{{$now->toDateString()}}">
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <table class="table table-striped table-bordered text-center" id="tables">
                                                    <thead><tr><th>الدرس</th><th>الدرجة</th><th>التقدير</th><th>التاريخ</th><th>عرض</th></tr></thead>
                                                    <tbody id="per">
                                                    <tr>

                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal fade" id="modal-default">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title">تفاصيل الدرس</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-striped table-bordered text-center" id="percents">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th>الجزء</th>
                                                                        <th>الدرجة</th>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-orange pull-left" data-dismiss="modal">اغلق</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="home-scrollable-9">
                                        <form class="mtb-15" action="{{route('admin.salaries.add')}}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                                            {{ csrf_field() }}
                                            <div class="box-body">
                                                <div class="row form-row">
                                                    <div class="col-md-4">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>المدرس</label>
                                                            <select name="teacher" id="teacher_salary" class="form-control pmd-select2 select2" style="width: 100%; text-align: right;">
                                                                <option></option>
                                                                @foreach($teachers as $teacher)
                                                                    <option value="{{$teacher->id}}">{{$teacher->teacher_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>السنة</label>
                                                            <select name="year" id="year_salary" class="form-control pmd-select2 select2" style="width: 100%; text-align: right;">
                                                                <option></option>
                                                                <option value="2019/2020">2019/2020</option>
                                                                <option value="2020/2021">2020/2021</option>
                                                                <option value="2021/2022">2021/2022</option>
                                                                <option value="2022/2023">2022/2023</option>
                                                                <option value="2023/2024">2023/2024</option>
                                                                <option value="2024/2025">2024/2025</option>
                                                                <option value="2025/2026">2025/2026</option>
                                                                <option value="2026/2027">2026/2027</option>
                                                                <option value="2027/2028">2027/2028</option>
                                                                <option value="2028/2029">2028/2029</option>
                                                                <option value="2029/2030">2029/2030</option>
                                                                <option value="2030/2031">2030/2031</option>
                                                                <option value="2031/2032">2031/2032</option>
                                                                <option value="2032/2033">2032/2033</option>
                                                                <option value="2033/2034">2033/2034</option>
                                                                <option value="2034/2035">2034/2035</option>
                                                                <option value="2035/2036">2035/2036</option>
                                                                <option value="2036/2037">2036/2037</option>
                                                                <option value="2037/2038">2037/2038</option>
                                                                <option value="2038/2039">2038/2039</option>
                                                                <option value="2039/2040">2039/2040</option>
                                                                <option value="2040/2041">2040/2041</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label>الشهر</label>
                                                            <select name="month" id="month_salary" class="form-control pmd-select2 select2" style="width: 100%; text-align: right;">
                                                                <option></option>
                                                                <option value="January">يناير</option>
                                                                <option value="February">فبراير</option>
                                                                <option value="March">مارس</option>
                                                                <option value="April">ابريل</option>
                                                                <option value="May">مايو</option>
                                                                <option value="June">يونيو</option>
                                                                <option value="July">يوليو</option>
                                                                <option value="August">أغسطس</option>
                                                                <option value="September">سبتمبر</option>
                                                                <option value="October">أكتوبر</option>
                                                                <option value="November">نوفمبر</option>
                                                                <option value="December">ديسمبر</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label class="control-label"> الراتب الأساسى</label>
                                                            <input name="salary" id="salary" type="number" class="form-control" readonly>
                                                            <input id="thour" type="hidden">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label class="control-label">عدد ايام الحضور</label>
                                                            <input name="days" id="days_salary" type="number" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label class="control-label">الخصومات</label>
                                                            <input name="minus" id="minus_salary" type="number" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label class="control-label">الساعات الاضافية</label>
                                                            <input name="hours" id="hours_salary" type="number" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label class="control-label">المبلغ الاضافى</label>
                                                            <input name="bonus" id="bonus_salary" type="number" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <label class="control-label">السلف</label>
                                                            <input name="parts" id="parts_salary" type="number" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="checkbox-inline">تم صرف الراتب ؟</label>
                                                            <input name="status" class="minimal" type="checkbox" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                            <button type="submit" class="btn btn-blue addButton pmd-ripple-effect btn-sm">حفظ</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Scrollable tab example end-->
                    </div>
                    <div class="col-md-3">
                        <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="fas fa-school"></i></span>
                            <a href="{{route('admin.centers')}}">
                                <div class="info-box-content">
                                    <br>
                                    <span class="info-box-number" style="color: white;">المراكز</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>

                                    <span class="info-box-text" style="color: white;">عرض بيانات المراكز</span>
                                </div>
                            </a>
                            <!-- /.info-box-content -->
                        </div>

                        <div class="info-box bg-purple">
                            <span class="info-box-icon"><i class="fa fa-bus"></i></span>
                            <a href="{{route('admin.transportations')}}">
                                <div class="info-box-content">
                                    <br>
                                    <span class="info-box-number" style="color: white;">المواصلات</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>

                                    <span class="info-box-text" style="color: white;">عرض بيانات المواصلات</span>
                                </div>
                            </a>
                            <!-- /.info-box-content -->
                        </div>

                        <div class="info-box bg-orange">
                            <span class="info-box-icon"><i class="fas fa-chalkboard-teacher"></i></span>
                            <a href="{{route('admin.courses')}}">
                                <div class="info-box-content">
                                    <br>
                                    <span class="info-box-number" style="color: white;">الحلقات</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>

                                    <span class="info-box-text" style="color: white;">عرض بيانات الحلقات</span>
                                </div>
                            </a>
                            <!-- /.info-box-content -->
                        </div>

                        <div class="info-box bg-red">
                            <span class="info-box-icon"><i class="fas fa-user-graduate"></i></span>
                            <a href="{{route('admin.levels')}}">
                                <div class="info-box-content">
                                    <br>
                                    <span class="info-box-number" style="color: white;">المستويات</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>

                                    <span class="info-box-text" style="color: white;">عرض بيانات المستويات</span>
                                </div>
                            </a>
                            <!-- /.info-box-content -->
                        </div>

                        <div class="info-box bg-blue">
                            <span class="info-box-icon"><i class="	fas fa-book-reader"></i></span>
                            <a href="{{route('admin.seasons')}}">
                                <div class="info-box-content">
                                    <br>
                                    <span class="info-box-number" style="color: white;">الفصول الدراسية</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>

                                    <span class="info-box-text" style="color: white;">عرض الفصول الدراسية</span>
                                </div>
                            </a>
                            <!-- /.info-box-content -->
                        </div>
                    </div>
                </div>

                @elseif(Auth::guard('admins')->user()->type == 'teacher')
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="box cases collapsed-box">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-edit"></i> تسجيل تقييم الطلاب</h3>
                                    <div class="box-tools pull-right">
                                        <a class="btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></a>
                                        <a class="btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <form class="mtb-15" action="{{route('admin.grades.add')}}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                        <div class="col-md-3">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label>المركز</label>
                                                <select class="form-control pmd-select2 select2" id="center" name="center_id" >
                                                    <option></option>
                                                    @foreach(App\Center::all() as $center)
                                                        <option value="{{$center->id}}">{{$center->center_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label>الطالب</label>
                                                <select class="form-control pmd-select2 select2" id="student" name="student_id">
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label>الدرس</label>
                                                <select class="form-control pmd-select2 select2" id="material" name="material_id">
                                                    <option ></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label class="control-label">تاريخ التقييم</label>
                                                <input name="date" type="text" class="form-control datepicker" value="{{$now->toDateString()}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="table table-striped table-bordered text-center" id="percent">
                                                <tbody>
                                                <tr>
                                                    <th>الجزء</th>
                                                    <th>الدرجة</th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-blue addButton pmd-ripple-effect btn-sm">  حفظ</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- /.col -->
    </div><!-- /.row -->

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="box cases collapsed-box">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-edit"></i> تسجيل حضور الطلاب</h3>
                    <div class="box-tools pull-right">
                        <a class="btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></a>
                        <a class="btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <form action="{{route('admin.absent.add')}}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="col-md-4">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label>المركز</label>
                                <select class="form-control pmd-select2 select2" id="cent" name="center_id">
                                    <option></option>
                                    @foreach(App\Center::all() as $center)
                                        <option value="{{$center->id}}">{{$center->center_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label>الحلقة</label>
                                <select class="form-control pmd-select2 select2" id="group" name="course_id">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label class="control-label">تاريخ التقييم</label>
                                <input name="date" type="text" class="form-control datepicker" value="{{$now->toDateString()}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-striped table-bordered text-center">
                                <tbody id="absent">
                                <tr><td>الطالب</td><td>الحالة</td><td></td></tr>
                                </tbody>
                            </table>
                            </table>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-blue addButton pmd-ripple-effect btn-sm">  حفظ</button>
                        </div>
                </form>
            </div>
        </div>
    </div><!-- /.col -->
    </div><!-- /.row -->

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="box cases collapsed-box">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-edit"></i> تقارير حضور الطلاب</h3>
                    <div class="box-tools pull-right">
                        <a class="btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></a>
                        <a class="btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-md-3">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <label>المركز</label>
                            <select class="form-control pmd-select2 select2" id="cen" name="center_id">
                                <option></option>
                                @foreach(App\Center::all() as $center)
                                    <option value="{{$center->id}}">{{$center->center_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <label>نوع الحلقة</label>
                            <select class="form-control pmd-select2 select2" id="name_type" name="type_id">
                                <option></option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <label>الحلقة</label>
                            <select class="form-control pmd-select2 select2" id="name_course" name="course_id">
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <label class="control-label">من</label>
                            <input id="dfrom" type="text" class="form-control datepicker" style="text-align: right;" value="{{$now->toDateString()}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <label class="control-label">الى</label>
                            <input id="dto" type="text" class="form-control datepicker" style="text-align: right;" value="{{$now->toDateString()}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-striped table-bordered text-center" id="tables">
                            <tbody id="absents">
                            <tr></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="box cases collapsed-box">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-edit"></i> تقارير درجات الطلاب</h3>
                    <div class="box-tools pull-right">
                        <a class="btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></a>
                        <a class="btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-md-4">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <select class="form-control pmd-select2 select2" id="centers" name="center_id">
                                <option></option>
                                @foreach(App\Center::all() as $center)
                                    <option value="{{$center->id}}">{{$center->center_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <select class="form-control pmd-select2 select2" id="courses" name="course_id">
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <select class="form-control pmd-select2 select2" id="students" name="student_id">
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <label>الدرس</label>
                            <select class="form-control pmd-select2 select2" id="materials" name="material_id">
                                <option></option>
                            </select>
                        </div>
                        <!--<div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label>.</label>
                        <button ng-click="exportToPdf()" class="btn btn-blue">PDF</button>
                        </div>
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label>.</label>
                        <button ng-click="exportToExcel('#customers')" class="btn btn-blue">Excel</button>
                        </div>-->
                    </div>
                    <div class="col-md-4">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <label class="control-label">من</label>
                            <input id="from" type="text" class="form-control datepicker" value="{{$now->toDateString()}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <label class="control-label">الى</label>
                            <input id="to" type="text" class="form-control datepicker" value="{{$now->toDateString()}}">
                        </div>

                    </div>
                    <div class="col-md-12">
                        <table class="table table-striped table-bordered text-center" id="tables">
                            <thead><tr><th>الدرس</th><th>الدرجة</th><th>التقدير</th><th>التاريخ</th><th>عرض</th></tr></thead>
                            <tbody id="per">
                            <tr>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">تفاصيل الدرس</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered text-center" id="percents">
                                            <tbody>
                                            <tr>
                                                <th>الجزء</th>
                                                <th>الدرجة</th>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-orange pull-left" data-dismiss="modal">اغلق</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                </div>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->
    @elseif(Auth::guard('admins')->user()->type == 'accountant')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="box cases collapsed-box">
                    <div class="box-header">
                        <h3 class="box-title"><i class="fa fa-edit"></i> تسجيل مدفوعات الطلاب</h3>
                        <div class="box-tools pull-right">
                            <a class="btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></a>
                            <a class="btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <form class="mtb-15" action="{{route('admin.payms.add')}}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="col-md-4">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label>المركز</label>
                                    <select class="form-control pmd-select2 select2" id="center_pay" name="center_id">
                                        <option ></option>
                                        @foreach(App\Center::all() as $center)
                                            <option value="{{$center->id}}">{{$center->center_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label>الحلقة</label>
                                    <select class="form-control pmd-select2 select2" id="course_pay" name="course_id">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label>الطالب</label>
                                    <select class="form-control pmd-select2 select2" id="student_pay" name="student_id">
                                        <option></option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label class="control-label">المبلغ</label>
                                    <input name="amount" type="number" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label>السنة</label>
                                    <select name="year" id="year" class="form-control pmd-select2 select2">
                                        <option></option>
                                        <option value="2019/2020">2019/2020</option>
                                        <option value="2020/2021">2020/2021</option>
                                        <option value="2021/2022">2021/2022</option>
                                        <option value="2022/2023">2022/2023</option>
                                        <option value="2023/2024">2023/2024</option>
                                        <option value="2024/2025">2024/2025</option>
                                        <option value="2025/2026">2025/2026</option>
                                        <option value="2026/2027">2026/2027</option>
                                        <option value="2027/2028">2027/2028</option>
                                        <option value="2028/2029">2028/2029</option>
                                        <option value="2029/2030">2029/2030</option>
                                        <option value="2030/2031">2030/2031</option>
                                        <option value="2031/2032">2031/2032</option>
                                        <option value="2032/2033">2032/2033</option>
                                        <option value="2033/2034">2033/2034</option>
                                        <option value="2034/2035">2034/2035</option>
                                        <option value="2035/2036">2035/2036</option>
                                        <option value="2036/2037">2036/2037</option>
                                        <option value="2037/2038">2037/2038</option>
                                        <option value="2038/2039">2038/2039</option>
                                        <option value="2039/2040">2039/2040</option>
                                        <option value="2040/2041">2040/2041</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label>الشهر</label>
                                    <select name="month" id="mon" class="form-control pmd-select2 select2">
                                        <option></option>
                                        <option value="1">يناير</option>
                                        <option value="2">فبراير</option>
                                        <option value="3">مارس</option>
                                        <option value="4">ابريل</option>
                                        <option value="5">مايو</option>
                                        <option value="6">يونيو</option>
                                        <option value="7">يوليو</option>
                                        <option value="8">أغسطس</option>
                                        <option value="9">سبتمبر</option>
                                        <option value="10">أكتوبر</option>
                                        <option value="11">نوفمبر</option>
                                        <option value="12">ديسمبر</option>
                                    </select>
                                    <input name="date" type="hidden" class="form-control datepicker" value="{{$now->toDateString()}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label" id="price">

                                </div>
                                <div class="form-group pmd-textfield pmd-textfield-floating-label" id="date">

                                </div>
                                <div class="form-group pmd-textfield pmd-textfield-floating-label" id="amount">

                                </div>
                                <div class="form-group pmd-textfield pmd-textfield-floating-label" id="remain">

                                </div>
                                <div class="form-group pmd-textfield pmd-textfield-floating-label" id="refund">

                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-blue addButton pmd-ripple-effect btn-sm">  حفظ</button>
                            </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="box cases collapsed-box">
                    <div class="box-header">
                        <h3 class="box-title"><i class="fa fa-edit"></i> تقارير عمليات الدفع</h3>
                        <div class="box-tools pull-right">
                            <a class="btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></a>
                            <a class="btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-4">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label>المركز</label>
                                <select class="form-control pmd-select2 select2" id="center_pays" name="center_id">
                                    <option ></option>
                                    @foreach(App\Center::all() as $center)
                                        <option value="{{$center->id}}">{{$center->center_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label>الحلقة</label>
                                <select class="form-control pmd-select2 select2" id="course_pays" name="course_id">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label>الطالب</label>
                                <select class="form-control pmd-select2 select2" id="student_pays" name="student_id">
                                    <option></option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label>السنة</label>
                                <select name="year" id="years" class="form-control pmd-select2 select2">
                                    <option></option>
                                    <option value="2019/2020">2019/2020</option>
                                    <option value="2020/2021">2020/2021</option>
                                    <option value="2021/2022">2021/2022</option>
                                    <option value="2022/2023">2022/2023</option>
                                    <option value="2023/2024">2023/2024</option>
                                    <option value="2024/2025">2024/2025</option>
                                    <option value="2025/2026">2025/2026</option>
                                    <option value="2026/2027">2026/2027</option>
                                    <option value="2027/2028">2027/2028</option>
                                    <option value="2028/2029">2028/2029</option>
                                    <option value="2029/2030">2029/2030</option>
                                    <option value="2030/2031">2030/2031</option>
                                    <option value="2031/2032">2031/2032</option>
                                    <option value="2032/2033">2032/2033</option>
                                    <option value="2033/2034">2033/2034</option>
                                    <option value="2034/2035">2034/2035</option>
                                    <option value="2035/2036">2035/2036</option>
                                    <option value="2036/2037">2036/2037</option>
                                    <option value="2037/2038">2037/2038</option>
                                    <option value="2038/2039">2038/2039</option>
                                    <option value="2039/2040">2039/2040</option>
                                    <option value="2040/2041">2040/2041</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label>الشهر</label>
                                <select name="month" id="month" class="form-control pmd-select2 select2">
                                    <option></option>
                                    <option value="1">يناير</option>
                                    <option value="2">فبراير</option>
                                    <option value="3">مارس</option>
                                    <option value="4">ابريل</option>
                                    <option value="5">مايو</option>
                                    <option value="6">يونيو</option>
                                    <option value="7">يوليو</option>
                                    <option value="8">أغسطس</option>
                                    <option value="9">سبتمبر</option>
                                    <option value="10">أكتوبر</option>
                                    <option value="11">نوفمبر</option>
                                    <option value="12">ديسمبر</option>
                                </select>
                                <input name="date" type="hidden" class="form-control datepicker" value="{{$now->toDateString()}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <table class="table table-striped table-bordered text-center">
                                    <tbody id="process">
                                    <tr><td>التاريخ</td><td>المبلغ</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="box cases collapsed-box">
                    <div class="box-header">
                        <h3 class="box-title"><i class="fa fa-edit"></i> صرف رواتب الموظفين </h3>
                        <div class="box-tools pull-right">
                            <a class="btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></a>
                            <a class="btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <form class="mtb-15" action="{{route('admin.salaries.add')}}" enctype="multipart/form-data" method="post" onsubmit="return false;">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="row form-row">
                                <div class="col-md-4">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label>المدرس</label>
                                        <select name="teacher" id="teacher_salary" class="form-control pmd-select2 select2" style="width: 100%; text-align: right;">
                                            <option></option>
                                            @foreach($teachers as $teacher)
                                                <option value="{{$teacher->id}}">{{$teacher->teacher_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label>السنة</label>
                                        <select name="year" id="year_salary" class="form-control pmd-select2 select2" style="width: 100%; text-align: right;">
                                            <option></option>
                                            <option value="2019/2020">2019/2020</option>
                                            <option value="2020/2021">2020/2021</option>
                                            <option value="2021/2022">2021/2022</option>
                                            <option value="2022/2023">2022/2023</option>
                                            <option value="2023/2024">2023/2024</option>
                                            <option value="2024/2025">2024/2025</option>
                                            <option value="2025/2026">2025/2026</option>
                                            <option value="2026/2027">2026/2027</option>
                                            <option value="2027/2028">2027/2028</option>
                                            <option value="2028/2029">2028/2029</option>
                                            <option value="2029/2030">2029/2030</option>
                                            <option value="2030/2031">2030/2031</option>
                                            <option value="2031/2032">2031/2032</option>
                                            <option value="2032/2033">2032/2033</option>
                                            <option value="2033/2034">2033/2034</option>
                                            <option value="2034/2035">2034/2035</option>
                                            <option value="2035/2036">2035/2036</option>
                                            <option value="2036/2037">2036/2037</option>
                                            <option value="2037/2038">2037/2038</option>
                                            <option value="2038/2039">2038/2039</option>
                                            <option value="2039/2040">2039/2040</option>
                                            <option value="2040/2041">2040/2041</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label>الشهر</label>
                                        <select name="month" id="month_salary" class="form-control pmd-select2 select2" style="width: 100%; text-align: right;">
                                            <option></option>
                                            <option value="January">يناير</option>
                                            <option value="February">فبراير</option>
                                            <option value="March">مارس</option>
                                            <option value="April">ابريل</option>
                                            <option value="May">مايو</option>
                                            <option value="June">يونيو</option>
                                            <option value="July">يوليو</option>
                                            <option value="August">أغسطس</option>
                                            <option value="September">سبتمبر</option>
                                            <option value="October">أكتوبر</option>
                                            <option value="November">نوفمبر</option>
                                            <option value="December">ديسمبر</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label class="control-label">الراتب الأساسى</label>
                                        <input name="salary" id="salary" type="number" class="form-control" readonly>
                                        <input id="thour" type="hidden">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label class="control-label">عدد ايام الحضور</label>
                                        <input name="days" id="days_salary" type="number" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label>الخصومات</label>
                                        <input name="minus" id="minus_salary" type="number" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label class="control-label">الساعات الاضافية</label>
                                        <input name="hours" id="hours_salary" type="number" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label class="control-label">المبلغ الاضافى</label>
                                        <input name="bonus" id="bonus_salary" type="number" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label class="control-label">السلف</label>
                                        <input name="parts" id="parts_salary" type="number" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label class="checkbox-inline">تم صرف الراتب ؟</label>
                                        <input name="status" class="minimal" type="checkbox" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <button type="submit" class="btn btn-blue addButton pmd-ripple-effect btn-sm">حفظ</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.box-body -->
                    </form>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
        @endif

        </section>
        </div>
        <!-- Content page End -->
@endsection
@section('footer')
    <script>
        //تسجيل الطالب ف الحلقه
        $('#add_type').on('change',function(e){
            var typeId = e.target.value;
            $.get("{{url('admin/ajax_type_with_courses')}}/"+typeId, function(data){
                $('#add_course').empty();
                $('#add_course').append('<option>             </option>');
                $.each(data, function(index, course){
                    $('#add_course').append('<option value="'+index+'">'+course+'</option>')
                });
            })
        })

        $('#add_center').on('change',function(e){
            var centerId = e.target.value;



            $.get("{{url('admin/ajax_type_with_centers')}}/"+centerId, function(data){
                console.log(data);
                $('#add_type').empty();
                $('#add_type').append('<option>             </option>');
                $.each(data, function(key, value){
                    $('#add_type').append('<option value="'+value.coursetype_id+'">'+value.type_name+'</option>')

                });
            })
        })


        $('#add_type').on('change',function(e){
            var typeId = e.target.value;

            $.get("{{url('admin/ajax_type_with_levels')}}/"+typeId, function(data){
                $('#level').empty();
                $('#level').append('<option>             </option>');
                $.each(data, function(index, course){
                    $('#level').append('<option value="'+index+'">'+course+'</option>')


                });
            })
        })


        $('#level').on('change',function(e){
            console.log(e);

            var level_id = e.target.value;


            $('#add_material').empty();
            $('#add_material').append('<tr><td>الدرس</td><td>تحديد</td><td>ملاحظات</td></tr>');
            $.ajax({
                url:"{{route('ajaxdata.getmaterialsdata')}}",
                method:'get',
                data:{id:level_id},
                dataType:'json',
                success:function(data)
                {
                    $.each(data, function(index, materialObj){
                        $('#add_material').append('<tr><td>'+materialObj.material_name+'</td><td><input name="mat'+materialObj.material_id+'" type="checkbox" checked> </td><td><input class="form-control" name="notes'+materialObj.material_id+'" type="text"></td></tr>')



                    });
                }
            });
        });




        //تسجيل المدرس ف الحلقه

        $('#new_center').on('change',function(e){
            var centerId = e.target.value;



            $.get("{{url('admin/ajax_type_with_centers')}}/"+centerId, function(data){
                $('#course').empty();
                $('#course').append('<option>             </option>');
                $.each(data, function(key, value){

                    $('#course').append('<option value="'+value.coursetype_id+'">'+value.type_name+'</option>')



                });
            })
        })


        $('#course').on('change',function(e){

            var typeId = e.target.value;

            $.get("{{url('admin/ajax_type_with_courses')}}/"+typeId, function(data){
                $('#new_course').empty();
                $('#new_course').append('<option>             </option>');
                $.each(data, function(index, course){
                    $('#new_course').append('<option value="'+index+'">'+course+'</option>');


                });
            })
        })




        $('#course').on('change',function(e){
            var typeId = e.target.value;

            $.get("{{url('admin/ajax_type_with_levels')}}/"+typeId, function(data){
                $('#newlevel').empty();
                $('#newlevel').append('<option>             </option>');
                $.each(data, function(index, course){
                    $('#newlevel').append('<option value="'+index+'">'+course+'</option>')

                    console.log(index);
                    console.log(course);

                });
            })
        })





        $('#newlevel').on('change',function(e){
            console.log(e);

            var level_id = e.target.value;

            $('#new_material').empty();
            $('#new_material').append('<tr><td>الدرس</td><td>تحديد</td><td>ملاحظات</td></tr>');
            $.ajax({
                url:"{{route('ajaxdata.getmaterialsdata')}}",
                method:'get',
                data:{id:level_id},
                dataType:'json',
                success:function(data)
                {
                    $.each(data, function(index, materialObj){
                        $('#new_material').append('<tr><td>'+materialObj.material_name+'</td><td><input name="mat'+materialObj.material_id+'" type="checkbox" checked> </td><td><input class="form-control" name="notes'+materialObj.material_id+'" type="text"></td></tr>')



                    });
                }
            });
        });












        //تسجيل ف الحل
        $('#get_new_center').on('change',function(e){
            var centerId = e.target.value;

            //    alert(centerId);

            $.get("{{url('admin/ajax_type_with_centers')}}/"+centerId, function(data){
                console.log('xyz');

                $('#addcourse1').empty();
                $('#addcourse1').append('<option>             </option>');
                $.each(data, function(key, value){

                    console.log(value.type_name);
                    $('#addcourse1').append('<option value="'+value.coursetype_id+'">'+value.type_name+'</option>')


                });
            })
        })


        $('#addcourse1').on('change',function(e){
            var typeId = e.target.value;


            $.get("{{url('admin/ajax_type_with_courses')}}/"+typeId, function(data){

                $('#get_new_course').empty();

                $('#get_new_course').append('<option>             </option>');

                $.each(data, function(index, course){

                    $('#get_new_course').append('<option value="'+index+'">'+course+'</option>')


                });
            })
        })

        $('#addcourse1 ').on('change',function(e){
            var typeId = e.target.value;
            alert(typeId);
            $.get("{{url('admin/ajax_type_with_levels')}}/"+typeId, function(data){
                $('#get_new_level1').empty();
                $('#get_new_level1').append('<option>             </option>');
                $.each(data, function(index, course){
                    $('#get_new_level1').append('<option value="'+index.id+'">'+course+'</option>')


                });
            })
        })



        $('#get_new_level1').on('change',function(e){
            console.log(e);

            var level_id = e.target.value;
            alert(level_id);

            $('#get_new_material1').empty();
            $('#get_new_material1').append('<tr><td>الدرس</td><td>تحديد</td><td>ملاحظات</td></tr>');
            $.ajax({
                url:"{{route('ajaxdata.getmaterialsdata')}}",
                method:'get',
                data:{id:level_id},
                dataType:'json',
                success:function(data)
                {
                    $.each(data, function(index, materialObj){
                        $('#get_new_material1').append('<tr><td>'+materialObj.material_name+'</td><td><input name="mat'+materialObj.material_id+'" type="checkbox" checked> </td><td><input class="form-control" name="notes'+materialObj.material_id+'" type="text"></td></tr>')



                    });
                }
            });
        });
        //تسجيل مدفوعات الطلاب


        $('#center_pay').on('change',function(e){
            var centerId = e.target.value;



            $.get("{{url('admin/ajax_type_with_centers')}}/"+centerId, function(data){
                $('#course_type').empty();
                $('#course_type').append('<option>             </option>');
                $.each(data, function(key, value){

                    $('#course_type').append('<option value="'+key+'">'+value.type_name+'</option>')



                });
            })
        })





        $('#course_type').on('change',function(e){
            var typeId = e.target.value;
            // alert(typeId);

            $.get("{{url('admin/ajax_type_with_courses')}}/"+typeId, function(data){

                $('#course_pay').empty();

                $('#course_pay').append('<option>             </option>');

                $.each(data, function(index, course){

                    $('#course_pay').append('<option value="'+index+'">'+course+'</option>')
                    // alert('<option value="'+index+'">'+course+'</option>');

                });
            })
        })

        //تسجيل حضور الطلاب


        $('#cent').on('change',function(e){
            var centerId = e.target.value;



            $.get("{{url('admin/ajax_type_with_centers')}}/"+centerId, function(data){
                $('#type_group').empty();
                $('#type_group').append('<option>             </option>');
                $.each(data, function(key, value){

                    $('#type_group').append('<option value="'+value.coursetype_id+'">'+value.type_name+'</option>')



                });
            })
        })




        $('#type_group').on('change',function(e){
            var typeId = e.target.value;


            $.get("{{url('admin/ajax_type_with_courses')}}/"+typeId, function(data){

                $('#course_group').empty();

                $('#course_group').append('<option>             </option>');

                $.each(data, function(index, course){

                    $('#course_group').append('<option value="'+index+'">'+course+'</option>')


                });
            })
        })

        //تقارير درجات الطلاب


        $('#centerss').on('change',function(e){
            var centerId = e.target.value;



            $.get("{{url('admin/ajax_type_with_centers')}}/"+centerId, function(data){
                $('#cour').empty();
                $('#cour').append('<option>             </option>');
                $.each(data, function(key, value){

                    $('#cour').append('<option value="'+value.coursetype_id+'">'+value.type_name+'</option>')



                });
            })
        })



        $('#cour').on('change',function(e){
            var typeId = e.target.value;


            $.get("{{url('admin/ajax_type_with_courses')}}/"+typeId, function(data){

                $('#courses').empty();

                $('#courses').append('<option>             </option>');

                $.each(data, function(index, course){

                    $('#courses').append('<option value="'+index+'">'+course+'</option>')


                });
            })
        })

        //تقرير حضور الطلاب

        $('#cen').on('change',function(e){
            var centerId = e.target.value;



            $.get("{{url('admin/ajax_type_with_centers')}}/"+centerId, function(data){
                $('#names_type').empty();
                $('#names_type').append('<option>             </option>');
                $.each(data, function(key, value){

                    $('#names_type').append('<option value="'+value.coursetype_id+'">'+value.type_name+'</option>')



                });
            })
        })


        $('#names_type').on('change',function(e){
            var typeId = e.target.value;



            $.get("{{url('admin/ajax_type_with_courses')}}/"+typeId, function(data){

                $('#names_course').empty();

                $('#names_course').append('<option>             </option>');

                $.each(data, function(index, course){

                    $('#names_course').append('<option value="'+index+'">'+course+'</option>')


                });
            })
        })



    </script>
@endsection
