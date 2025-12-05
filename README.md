README.md — Student Timetable Generator (DevOps + CI/CD + Kubernetes)
🎓 Student Timetable Generator – Complete DevOps Project

A fully automated CI/CD DevOps pipeline for deploying a PHP-based Student Timetable Generator using:

GitHub

Jenkins CI/CD

SonarQube Code Quality

Docker & DockerHub

Kubernetes (Minikube / AWS EKS)

Nginx Ingress Controller

Rolling Updates & Zero-Downtime Deployment

📌 Project Overview

This project automates the entire process of:

Pulling code from GitHub

Running SonarQube code analysis

Building Docker images

Pushing image to DockerHub

Deploying to Kubernetes cluster

Exposing using Nginx Ingress

Designed to demonstrate real-world DevOps pipeline, containerization, and Kubernetes orchestration.

🏗 Architecture
Developer → GitHub → Jenkins → SonarQube → Docker Build → DockerHub →
Kubernetes (Minikube/EKS) → Deploy → Nginx Ingress → Public URL

📁 Folder Structure
student-timetable-generator/
│── src/
│── Dockerfile
│── nginx.conf
│── Jenkinsfile
│── sonar-project.properties
│── k8s/
│    ├── deployment.yaml
│    ├── service.yaml
│    ├── ingress.yaml
│── README.md
