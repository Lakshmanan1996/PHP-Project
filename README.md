🎓 Student Timetable Generator – Full DevOps CI/CD Pipeline (Jenkins + Docker + Kubernetes)

This repository contains a PHP-based Student Timetable Generator application deployed using a complete end-to-end DevOps CI/CD pipeline.
The project demonstrates real-world DevOps practices including:

Automated build & deployments

Docker containerization

SonarQube code-quality scanning

Kubernetes orchestration

Nginx Ingress exposure

Zero-downtime rolling updates

GitHub → Jenkins → Docker → Kubernetes integration

🚀 Key Features
🔹 Timetable Application

PHP-based student timetable generator

Easy UI for generating weekly schedules

Nginx + PHP-FPM backend

🔹 DevOps Implementation

Fully automated CI/CD

Dockerized application

Push to DockerHub

Kubernetes deployment

Nginx ingress for external access

SonarQube static code analysis

Rolling updates (no downtime)

🧱 Project Architecture
Developer
    ↓
GitHub → Jenkins → SonarQube → Docker Build → DockerHub
    ↓
Kubernetes Cluster (Minikube / AWS EKS)
    ↓
Service → Ingress → Public Access

📂 Folder Structure
student-timetable-generator/
│── src/
│    ├── index.php
│    ├── timetable.php
│    ├── assets/
│    └── include/
│── Dockerfile
│── nginx.conf
│── Jenkinsfile
│── sonar-project.properties
│── k8s/
│    ├── deployment.yaml
│    ├── service.yaml
│    ├── ingress.yaml
│── README.md
