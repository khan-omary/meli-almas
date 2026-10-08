@extends('layouts.app')

@section('title', 'jobs')


@section('css')
@vite([
'resources/css/job.css',
])
@endsection()

@section('content')

<div class="container">
    <h2>په لاندی برخو کی موږ مسلکي کسانو ته ضرورت لرو</h2>
    <!-- Jobs -->
    <div class="jobs fade">

        <div class="job-card">
            <img
                src="https://cdn.arabsstock.com/uploads/videos/72434/two-saudi-arabian-gulf-solar-thumbnail-72434.jpeg">
            <div class="content">
                <h2>ساحوی انجینر</h2>
                <p>د ساختماني پروژو څارنه او مدیریت.</p>
                <a href="#form" class="btn">Apply</a>
            </div>
        </div>

        <div class="job-card">
            <img
                src="https://www.constructionplacements.com/wp-content/uploads/2025/10/What-Is-a-Construction-Designer-Role-Skills-Salary-US-960x640.jpg">
            <div class="content">
                <h2>ډیزاینر</h2>
                <p>د ودانیو ډیزاین او پلان جوړونه.</p>
                <a href="#form" class="btn">Apply</a>
            </div>
        </div>

        <div class="job-card">
            <img src="https://nishe.in/wp-content/uploads/2021/01/how-to-become-a-work-health-and-safety-officer.jpg">
            <div class="content">
                <h2>تکړه سر کارګر</h2>
                <p>په ساختماني سایټ کې عملي کار.</p>
                <a href="#form" class="btn">Apply</a>
            </div>
        </div>

        <div class="job-card">
            <img src="https://sienge.com.br/wp-content/uploads/2024/12/nr-28-2.jpg">
            <div class="content">
                <h2>تکړه سر کارګر</h2>
                <p>په ساختماني سایټ کې عملي کار.</p>
                <a href="#form" class="btn">Apply</a>
            </div>
        </div>

        <div class="job-card">
            <img src="https://sienge.com.br/wp-content/uploads/2024/12/nr-28-2.jpg">
            <div class="content">
                <h2>تکړه سر کارګر</h2>
                <p>په ساختماني سایټ کې عملي کار.</p>
                <a href="#form" class="btn">Apply</a>
            </div>
        </div>

        <div class="job-card">
            <img src="https://sienge.com.br/wp-content/uploads/2024/12/nr-28-2.jpg">
            <div class="content">
                <h2>تکړه سر کارګر</h2>
                <p>په ساختماني سایټ کې عملي کار.</p>
                <a href="#form" class="btn">Apply</a>
            </div>
        </div>

    </div>

    <div id="form" class="form-section fade">
        <h2>د وظیفې لپاره د غوښتنه فورم</h2>
        <form id="jobForm" enctype="multipart/form-data">

            <div class="per-info">
                <input type="text" id="name" placeholder="بشپړ نوم" required>
                <input type="email" id="email" placeholder="ایمیل" required>
                <input type="tel" id="phone" placeholder="شمېره" required>
            </div>

            <select id="job" required>
                <option value="">وظیفه انتخاب کړئ</option>
                <option>ساحوی انجینر</option>
                <option>ډیزاینر</option>
                <option>تکړه سر کارګر</option>
            </select>
            <textarea id="experience" placeholder="خپل تجربه او مهارتونه ولیکئ" required></textarea>
            <label>خپل CV اپلوډ کړئ (PDF/DOC)</label>
            <input type="file" id="cv" accept=".pdf,.doc,.docx" required>
            <input type="submit" value="ولیږه" class="submit-btn" onclick="saveData()">
        </form>
    </div>

</div>
@endsection()

@section('js')
<script src="{{ asset('js/jobForm.js')}}"></script>
<script src="{{ asset('js/load_Job_data.js')}}"></script>
<script src=" {{ asset('js/jobForm_local_storage.js')}}"></script>
<script src="{{ asset('js/header_hambergarMenu.js')}}"></script>
@endsection()