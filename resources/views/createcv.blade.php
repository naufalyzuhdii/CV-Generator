@extends('layouts.main')

@section('linkCSS')
<link rel="stylesheet" href="{{ asset('css/createcv.css') }}">
@endsection

@section('container')
    {{-- {{dd(Auth::user())}} --}}
    <h1 class="page-title">Create CV & PORTOFOLIO</h1>

    <div class="white-box-container">
        <h1>Summary</h1>
        <p>{{ $cv->summary }}</p>

        <a href="https://www.youtube.com/" class="btn btn-primary rounded-pill">Edit Your Summary</a>

    </div>

    <div class="white-box-container">
        <h1>Your Skills</h1>
        @forelse ($cv->Skills as $skill)
            <p>{{ $skill }}</p>
        @empty
            <h2>Currently no skills is recorded,please insert a skill</h2>
        @endforelse
    </div>

    <div class="white-box-container">
        <h1>Your Experience</h1>
        @forelse ($cv->Experiences as $exp)
            <p>{{ $exp }}</p>
        @empty
            <h2>Currently no Experience is recorded,please insert a Work Experience</h2>
        @endforelse
    </div>

    <div class="add-content">
        <div class="adding">
            <input type="checkbox" id="skill" class="skill" />

            <label for="skill" class="title">Add Skill</label>

            <form action="{{ route('createSkill',['id' => $cv->id]) }}" class="form" method="POST">
                @csrf
                <!-- Skill Name -->
                <div class="group">
                    <div class="column-1">
                        <label for="skill_name">skill name</label>
                    </div>
                    <div class="column-2">
                        <input type="text" name="skill_name" id="Skill_name" placeholder="skill name" />
                    </div>
                </div>
                <!-- Skill Type -->
                <div class="group">
                    <div class="column-1">
                        <label for="type">skill type</label>
                    </div>
                    <div class="column-2">
                        <select name="skill_type" id="type">
                            <option value="Technical">Technical</option>
                            <option value="Communication">Communication</option>
                            <option value="Teamwork">Teamwork</option>
                            <option value="Critical Thinking">Critical Thinking</option>
                            <option value="Problem Solving">Problem Solving</option>
                            <option value="Time Management">Time Management</option>
                            <option value="Leadership Skills">Leadership Skills</option>
                            <option value="Organization">Organization</option>
                            <option value="Language Skill">Language Skill</option>
                        </select>
                    </div>
                </div>
                <!-- Description -->
                <div class="group">
                    <div class="column-1">
                        <label for="description">description</label>
                    </div>
                    <div class="column-2">
                        <input type="text" name="skill_description" id="skill_description" placeholder="description" />
                    </div>
                </div>
                <!-- Level -->
                <div class="group">
                    <div class="column-1">
                        <label for="level">level</label>
                    </div>
                    <div class="column-2">
                        <input type="text" name="skill_level" id="level" placeholder="1-10" />
                    </div>
                </div>

                <input type="submit" class="submit" value="Insert Skill" />
            </form>
        </div>
        <div class="adding">
            <input type="checkbox" id="experience" class="experience" />
            <!-- Button -->
            <label for="experience" class="title">Add Experience</label>

            <form action="{{ route('createExp',['id' => $cv->id]) }}" enctype="multipart/form-data" class="form" method="POST">
                @csrf
                <!-- Experience Name -->
                <div class="group">
                    <div class="column-1">
                        <label for="org_name">Organization name</label>
                    </div>
                    <div class="column-2">
                        <input type="text" name="org_name" id="experience-name" placeholder="experience name" />
                    </div>
                </div>
                <!-- Job Type -->
                <div class="group">
                    <div class="column-1">
                        <label for="type">Job type</label>
                    </div>
                    <div class="column-2">
                        <select name="type" id="type">
                            <option value="Part-time">Part-time</option>
                            <option value="Full-time">Full-time</option>
                            <option value="Contract">Contract</option>
                            <option value="Self-employed">Self-employed</option>
                            <option value="Seasonal">Seasonal</option>
                            <option value="Intern">Intern</option>

                        </select>
                    </div>
                </div>
                <!-- Password -->
                <div class="group">
                    <div class="column-1">
                        <label for="description">description</label>
                    </div>
                    <div class="column-2">
                        <input type="text" name="description" id="description" placeholder="description" />
                    </div>
                </div>
                <!-- Start Date -->
                <div class="group">
                    <div class="column-1">
                        <label for="start-date">start date</label>
                    </div>
                    <div class="column-2">
                        <input type="date" name="start_date" id="start-date" placeholder="start date" />
                    </div>
                </div>
                <!-- End Date -->
                <div class="group">
                    <div class="column-1">
                        <label for="end-date">end date</label>
                    </div>
                    <div class="column-2">
                        <input type="date" name="end_date" id="end-date" placeholder="end date" />
                    </div>
                </div>
                <!-- Link -->
                <div class="group">
                    <div class="column-1">
                        <label for="link">link</label>
                    </div>
                    <div class="column-2">
                        <input type="text" name="link" id="link" placeholder="link" />
                    </div>
                </div>
                <!-- Submit button -->
                <input type="submit" class="submit" value="submit" />
            </form>
        </div>

        <div class="createpdf">
            <a href="makePDF"class='btn'>print</a>
        </div>
    </div>

@endsection
