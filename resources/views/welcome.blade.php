<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dave Ivan Ducusin - Web Design Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .profile {
            text-align: center;
            margin: 20px 0;
        }
        .profile img {
            width: 150px;
            border-radius: 50%;
        }
        .profile h1 {
            margin: 10px 0;
        }
        .projects {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .project {
            background: #fff;
            margin: 20px;
            padding: 20px;
            width: 30%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .project img {
            width: 100%;
        }
        .project h3 {
            margin-top: 10px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Dave Ivan Ducusin</h1>
        <p>Web System Designer & Developer</p>
    </header>
    <div class="container">
        <div class="profile">
            <img src="img/profile.jpg" alt="Dave Ivan Ducusin">
            <h1>Dave Ivan Ducusin</h1>
            <p>Welcome to my portfolio. I am a passionate web system designer and developer with a knack for creating elegant and efficient web solutions. With a strong foundation in both front-end and back-end development, I excel at crafting visually appealing, user-friendly websites and applications. My expertise spans HTML, CSS, JavaScript, and various frameworks like React and Angular, enabling me to bring innovative ideas to life. I am dedicated to staying updated with the latest industry trends and technologies to ensure my projects are not only modern but also highly functional. Whether it's a sleek corporate website, an engaging e-commerce platform, or a dynamic web application, I am committed to delivering top-notch results that exceed expectations. Explore my portfolio to see examples of my work and discover how I can help bring your digital vision to reality.</p>
        </div>
        <section class="projects">
            <div class="project">
                <img src="../public/img/project1.jpg" alt="Project 1">
                <h3>Project Management Systems</h3>
                <p>
Our Project Management System is a comprehensive, user-friendly platform designed to streamline project planning, execution, and monitoring for teams of all sizes. It features robust task management, time tracking, collaboration tools, interactive Gantt charts, and resource management. Users can manage budgets, track costs, generate detailed reports and analytics, and maintain documents in a centralized repository. The system supports customizable dashboards and integrates seamlessly with tools like Slack, Trello, Jira, and Google Workspace. Built with React.js for a dynamic front-end, and Node.js with Express.js for a scalable back-end, it utilizes MongoDB for data storage, JWT for secure authentication, WebSocket and Socket.io for real-time communication, AWS S3 for cloud storage, and CI/CD pipelines with Jenkins and Docker for automated testing and deployment. This solution simplifies project management complexities, empowering teams to achieve their goals efficiently.</p>
            </div>
            <div class="project">
                <img src="{{URL('img/project2.jpg')}}" alt="Project 2">
                <h3>Collaborative Management Systems</h3>
                <p>
Our Collaborative Management System is my brainchild, meticulously crafted to optimize teamwork, communication, and productivity within organizations. By fostering seamless collaboration across teams and departments, my system enables users to work together efficiently towards common objectives, regardless of their location or time zone. I've integrated features such as task assignment and tracking, document management with version control, shared calendars and scheduling tools, project planning with interactive Gantt charts, task automation, customizable analytics dashboards, and robust security measures. Built with React.js for a dynamic user interface and Node.js with Express.js for scalability, my system leverages technologies like WebSocket for real-time communication and integrates seamlessly with popular collaboration tools like Slack and Zoom. With a focus on user experience, security, and integration capabilities, my Collaborative Management System empowers organizations to enhance productivity, streamline workflows, and achieve their goals effectively.</p>
            </div>
            <div class="project">
                <img src="img/project3.jpg" alt="Project 3">
                <h3>Accounting Management Systems</h3>
                <p>
Our Accounting Management System is a comprehensive solution designed to streamline financial processes, enhance accuracy, and improve decision-making for businesses of all sizes. With features including invoice management, expense tracking, accounts payable automation, customizable financial reporting, budgeting and forecasting, tax management, inventory management, and multi-currency support, our system covers all aspects of accounting and finance. Leveraging industry-leading accounting software, secure database management, integration APIs, robust security measures, cloud infrastructure, reporting tools, automation capabilities, and mobile accessibility, our system provides a scalable and efficient platform to manage finances with confidence and efficiency. Whether you're a small startup or a large enterprise, our solution empowers you to maintain financial health, compliance, and control.</p>
            
</div>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Dave Ivan Ducusin</p>
        <a href="https://www.facebook.com/did.ducusin/">Contact Me</a>
    </footer>
</body>
</html>
