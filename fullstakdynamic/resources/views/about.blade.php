@extends('index')

@section('main-content')
<section style="padding: 40px 20px;">
    <h2 style="text-align:center; font-size:32px; margin-bottom:20px;">About Me</h2>
    <div style="max-width:800px; margin:0 auto; font-size:18px; line-height:1.6;">
        <p>
            Hello! I’m <strong>Jamil Hasan</strong>, a passionate User Experience Designer with over 15 years of experience in creating intuitive and engaging digital experiences. I specialize in transforming ideas into functional and visually appealing interfaces that connect with users on a deeper level.
        </p>
        <p>
            My design process is centered around research, prototyping, and constant iteration to ensure the final product not only looks good but also performs well. I’ve worked with over 58 clients globally and completed more than 250 projects ranging from mobile apps to full-scale web platforms.
        </p>
        <p>
            Apart from designing, I love mentoring upcoming designers, contributing to open-source projects, and continuously learning about new technologies and design trends.
        </p>

        <div style="margin-top: 40px;">
            <h3 style="margin-bottom: 12px;">Skills</h3>
            <ul style="list-style: none; padding-left: 0;">
                <li>
                    <strong>UI/UX Design</strong> – Figma, Adobe XD, Sketch
                </li>
                <li>
                    <strong>Web Technologies</strong> – HTML, CSS, JavaScript, Bootstrap
                </li>
                <li>
                    <strong>Tools</strong> – Adobe Creative Suite, Zeplin, InVision
                </li>
                <li>
                    <strong>Soft Skills</strong> – Communication, Leadership, Problem Solving
                </li>
            </ul>
        </div>

        <div style="margin-top: 40px;">
            <h3 style="margin-bottom: 12px;">Team Members</h3>
            <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                <div style="border: 1px solid #ccc; border-radius: 8px; padding: 12px; width: 200px; text-align: center;">
                    <img src="{{ asset('assets/image/tuli.jpg') }}" alt="Team Member" style="width: 120px; height: 120px; border-radius: 50%; margin-bottom: 10px; object-fit: cover;">
                    <h4>Tanjina Ahmed Tuli</h4>
                    <p style="font-size:14px;">Frontend Developer</p>
                </div>
                <div style="border: 1px solid #ccc; border-radius: 8px; padding: 12px; width: 200px; text-align: center;">
                    <img src="{{ asset('assets/image/shafin.jpg') }}" alt="Team Member" style="width: 120px; height: 120px; border-radius: 50%; margin-bottom: 10px; object-fit: cover;">
                    <h4>Tanjid Ahmed Shafin</h4>
                    <p style="font-size:14px;">UI/UX Researcher</p>
                </div>
                <div style="border: 1px solid #ccc; border-radius: 8px; padding: 12px; width: 200px; text-align: center;">
                    <img src="{{ asset('assets/image/tamal.jpg') }}" alt="Team Member" style="width: 120px; height: 120px; border-radius: 50%; margin-bottom: 10px; object-fit: cover;">
                    <h4>Ehmad Tamal</h4>
                    <p style="font-size:14px;">Backend Developer</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
