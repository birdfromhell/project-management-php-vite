@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<nav class="navbar navbar-light bg-white">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="javascript:void(0);">Navbar</a>
  </div>
</nav>
<div class="table-responsive text-nowrap">
 <table class="table">
  <thead>
    <tr>
      <th>Project</th>
      <th>Client</th>
      <th>Users</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody class="table-border-bottom-0">
    <tr>
      <td><i class="ri-suitcase-2-line ri-22px text-danger me-4"></i><span class="fw-medium">Tours Project</span></td>
      <td>Albert Cook</td>
      <td>
        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up"
          title="Lilian Fuller">
          <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
        </li>
        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
          <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
        </li>
        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
          <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
        </li>
      </ul>
    </td>
    <td><span class="badge rounded-pill bg-label-primary me-1">Active</span></td>
    <td>
      <div class="dropdown">
        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line"></i></button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:void(0);"><i class="ri-pencil-line me-1"></i> Edit</a>
          <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-7-line me-1"></i> Delete</a>
        </div>
      </div>
    </td>
    </tr>
    <tr>
      <td><i class="ri-basketball-fill ri-22px text-info me-4"></i><span class="fw-medium">Sports Project</span></td>
      <td>Barry Hunter</td>
      <td>
        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
            <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
          </li>
          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
            <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
          </li>
          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
            <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
          </li>
        </ul>
      </td>
      <td><span class="badge rounded-pill bg-label-success me-1">Completed</span></td>
      <td>
        <div class="dropdown">
          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line"></i></button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-pencil-line me-2"></i> Edit</a>
            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-7-line me-2"></i> Delete</a>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td><i class="ri-leaf-fill ri-22px text-success me-4"></i><span class="fw-medium">Greenhouse Project</span></td>
      <td>Trevor Baker</td>
      <td>
        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
            <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
          </li>
          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
            <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
          </li>
          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
            <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
          </li>
        </ul>
      </td>
      <td><span class="badge rounded-pill bg-label-info me-1">Scheduled</span></td>
      <td>
        <div class="dropdown">
          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line"></i></button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-pencil-line me-2"></i> Edit</a>
            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-7-line me-2"></i> Delete</a>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td><i class="ri-bank-fill ri-22px text-primary me-4"></i><span class="fw-medium">Bank Project</span></td>
      <td>Jerry Milton</td>
      <td>
        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
            <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
          </li>
          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
            <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
          </li>
          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
            <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
          </li>
        </ul>
      </td>
      <td><span class="badge rounded-pill bg-label-warning me-1">Pending</span></td>
      <td>
        <div class="dropdown">
          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line"></i></button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-pencil-line me-2"></i> Edit</a>
            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-7-line me-2"></i> Delete</a>
          </div>
        </div>
      </td>
    </tr>
  </tbody>
 </table>
</div>

<h4>Home Page</h4>
<p>For more layout options refer <a href="{{ config('variables.documentation') ? config('variables.documentation').'/laravel-introduction.html' : '#' }}" target="_blank" rel="noopener noreferrer">documentation</a>.</p>
@endsection
