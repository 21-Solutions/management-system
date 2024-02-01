@extends('website.layouts.tutor')

@section('content')
    <div>
        <div class="mb-5 rounded-lg">
            <div>
                <span class="grey--text text--darken-2 mr-2 _24px">
                    <b>Hello, </b>Linda
                </span>
            </div>
        </div>

        <div>
            <div class="glass pa-3 rounded-lg">
                <div class="mb-0">
                    <div>
                        <h4>Statistics Overview</h4>
                    </div>
                    <div class="text-right">
                        <span class="iconlyBulk-Graph _28px green--text text--accent-4">
                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                        </span>
                    </div>
                </div>

                <div>
                    <div>
                        <StatCard
                            color="primary"
                            icon="ph-graduation-cap"
                            title="Enrolled Courses"
                            :num="1"
                            url="/app/student/courses"
                        ></StatCard>
                    </div>
                    <div>
                        <StatCard
                            color="success"
                            icon="ph-webcam"
                            title="Virtual Lessons"
                            :num="5"
                            url="/app/student/virtual-lessons"
                        ></StatCard>
                    </div>
                    <div>
                        <StatCard
                            color="warning"
                            icon="ph-question"
                            title="Assignments"
                            :num="5"
                            url="/app/student/assignments"
                        ></StatCard>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="glass pa-3">
                <div class="mb-0">
                    <div>
                        <h4>My Calendar</h4>
                    </div>
                    <div class="text-right">
                        <span class="iconlyBulk-Calendar _28px green--text">
                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                        </span>
                    </div>
                </div>
                <StudentCalendar></StudentCalendar>
            </div>
        </div>

        <div class="mt-5 transparent">
            <div>
                <h4>Recent Enrolled Courses</h4>
            </div>

            <div>
                <nuxt-link
                    rounded
                    class="mx-1 menu-btn"
                    color="primary"
                    href="/app/student/courses"
                >
                    See All
                    <i class="mdi mdi-chevron-right"></i>
                </nuxt-link>
            </div>
        </div>

        <div class="mb-5">
            <div>
                <div
                    v-for="(course, index) in courses"
                    :key="index"
                >
                    <CourseCard :course="course" :is_enrolled="1"></CourseCard>
                </div>
                <br>
            </div>
        </div>
    </div>
@endsection
