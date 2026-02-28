<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #3d1f1a 0%, #5c2f24 100%);
            color: white;
            overflow-x: hidden;
            padding-top: 80px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 60px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: rgba(40, 15, 10, 0.85);
            backdrop-filter: blur(12px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.3);
        }

        .logo {
            border: 2px solid rgba(255, 255, 255, 0.3);
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 14px;
            letter-spacing: 2px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .logo:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.5);
        }

        .nav-links {
            display: flex;
            gap: 40px;
            list-style: none;
        }

        .nav-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #ff8c42;
            transition: width 0.3s ease;
        }

        .nav-links a:hover {
            color: white;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .book-btn {
            background: linear-gradient(135deg, #ff8c42 0%, #ff6b35 100%) !important;
            padding: 10px 24px !important;
            border-radius: 25px !important;
            color: white !important;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(255, 107, 53, 0.3);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .book-btn::after {
            display: none !important;
        }

        .book-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 107, 53, 0.5);
        }
 .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 80px 60px;
            min-height: calc(100vh - 100px);
            position: relative;
        }

        .hero-content {
            flex: 1;
            max-width: 600px;
            animation: slideInLeft 1s ease-out;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .welcome-badge {
            display: inline-block;
            background: linear-gradient(135deg, #ff8c42 0%, #ff6b35 100%);
            padding: 12px 28px;
            border-radius: 25px;
            font-size: 13px;
            letter-spacing: 1px;
            margin-bottom: 30px;
            animation: pulse 2s infinite;
            box-shadow: 0 4px 15px rgba(255, 140, 66, 0.4);
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }

        h1 {
            font-size: 72px;
            font-weight: 700;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #ff8c42 0%, #ffb347 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.1;
            position: relative;
        }

        .skills-badges {
            display: flex;
            gap: 15px;
            margin: 25px 0;
        }

        .skill-badge {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
            transition: all 0.3s ease;
            cursor: pointer;
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
        }

        .skill-badge:nth-child(1) {
            background: linear-gradient(135deg, #ff6b35 0%, #ff8c42 100%);
            animation-delay: 0.2s;
        }

        .skill-badge:nth-child(2) {
            background: linear-gradient(135deg, #4a90e2 0%, #357abd 100%);
            animation-delay: 0.4s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
            from {
                opacity: 0;
                transform: translateY(20px);
            }
        }

        .skill-badge:hover {
            transform: translateY(-5px) rotate(5deg);
            box-shadow: 0 8px 25px rgba(255, 140, 66, 0.5);
        }

        .subtitle {
            color: rgba(255, 255, 255, 0.7);
            font-size: 16px;
            margin-top: 20px;
            letter-spacing: 0.5px;
        }

        .hero-cta-btn {
            display: inline-block;
            margin-top: 35px;
            padding: 16px 40px;
            background: linear-gradient(135deg, #ff8c42 0%, #ff6b35 100%);
            border-radius: 50px;
            border: none;
            color: white;
            font-size: 16px;
            font-weight: 700;
            text-decoration: none;
            box-shadow: 0 8px 25px rgba(255, 107, 53, 0.4);
            transition: all 0.3s ease;
            letter-spacing: 0.5px;
            cursor: pointer;
            font-family: inherit;
        }

        .hero-cta-btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 35px rgba(255, 107, 53, 0.6);
        }

        .hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            animation: slideInRight 1s ease-out;
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .image-container {
            position: relative;
            width: 450px;
            height: 450px;
        }

        .glow-circle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 140, 66, 0.3) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from {
                transform: translate(-50%, -50%) rotate(0deg);
            }
            to {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        .profile-frame {
            position: relative;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            overflow: hidden;
            border: 5px solid rgba(255, 140, 66, 0.5);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
            z-index: 2;
        }

        .profile-image {
            width: 70%;
            height: 100%;
           
            filter: brightness(1.1) contrast(1.05);
        }

        .floating-element {
            position: absolute;
            width: 80px;
            height: 80px;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            animation: float 3s ease-in-out infinite;
            z-index: 3;
        }

        .float-1 {
            top: 10%;
            right: -20px;
            animation-delay: 0s;
        }

        .float-2 {
            bottom: 15%;
            left: -30px;
            animation-delay: 1s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        @media (max-width: 968px) {
            .hero {
                flex-direction: column;
                text-align: center;
                padding: 40px 30px;
            }

            .hero-content {
                max-width: 100%;
            }

            h1 {
                font-size: 48px;
            }

            .skills-badges {
                justify-content: center;
            }

            .image-container {
                width: 350px;
                height: 350px;
                margin-top: 40px;
            }

            .profile-frame {
                width: 300px;
                height: 300px;
            }

            nav {
                padding: 20px 30px;
            }

            .nav-links {
                gap: 20px;
                font-size: 12px;
            }
        }

        /* About Section Styles */
        .about {
            padding: 100px 60px;
            background: linear-gradient(135deg, #2a1510 0%, #4a1f18 100%);
            position: relative;
        }

        .about-container {
            display: flex;
            align-items: center;
            gap: 80px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .about-text {
            flex: 1;
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .about-title {
            font-size: 42px;
            line-height: 1.3;
            margin-bottom: 30px;
            background: linear-gradient(135deg, #ff8c42 0%, #ffb347 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }

        .about-description {
            color: rgba(255, 255, 255, 0.85);
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .about-tagline {
            color: rgba(255, 255, 255, 0.9);
            font-size: 17px;
            line-height: 1.8;
            margin: 30px 0;
            font-weight: 500;
        }

        .skills-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 35px;
        }

        .skill-tag {
            background: linear-gradient(135deg, #ff8c42 0%, #ff6b35 100%);
            padding: 12px 24px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(255, 140, 66, 0.3);
        }

        .skill-tag:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 25px rgba(255, 140, 66, 0.5);
        }

        .badge-small {
            background: rgba(255, 255, 255, 0.3);
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 700;
        }

        .about-image {
            flex: 0 0 400px;
            position: relative;
            animation: fadeIn 1s ease-out 0.3s backwards;
        }

        .about-image-frame {
            position: relative;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.6);
            border: 5px solid rgba(255, 140, 66, 0.3);
            transition: all 0.3s ease;
        }

        .about-image-frame:hover {
            transform: translateY(-10px);
            box-shadow: 0 35px 90px rgba(255, 140, 66, 0.4);
            border-color: rgba(255, 140, 66, 0.5);
        }

        .about-profile-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            display: block;
            filter: brightness(1.05) contrast(1.05);
        }

        @media (max-width: 968px) {
            .about {
                padding: 60px 30px;
            }

            .about-container {
                flex-direction: column-reverse;
                gap: 40px;
            }

            .about-title {
                font-size: 32px;
            }

            .about-image {
                flex: 0 0 auto;
                width: 100%;
                max-width: 350px;
            }

            .about-profile-image {
                height: 400px;
            }

            .skills-container {
                justify-content: center;
            }
        }

        /* Portfolio Section Styles */
        .portfolio {
            background: linear-gradient(180deg, #e8b4a0 0%, #f0c4b0 100%);
            padding: 80px 60px 0;
            position: relative;
        }

        .portfolio-header {
            display: flex;
            align-items: center;
            gap: 30px;
            margin-bottom: 50px;
            animation: fadeIn 0.8s ease-out;
        }

        .portfolio-title {
            font-size: 36px;
            font-weight: 700;
            color: #3d1f1a;
            letter-spacing: 2px;
            white-space: nowrap;
        }

        .title-line {
            flex: 1;
            height: 2px;
            background: linear-gradient(90deg, #3d1f1a 0%, transparent 100%);
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-bottom: 50px;
        }

        .portfolio-item {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            aspect-ratio: 1;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            animation: fadeInScale 0.6s ease-out backwards;
        }

        .portfolio-item:nth-child(1) { animation-delay: 0.1s; }
        .portfolio-item:nth-child(2) { animation-delay: 0.2s; }
        .portfolio-item:nth-child(3) { animation-delay: 0.3s; }
        .portfolio-item:nth-child(4) { animation-delay: 0.4s; }
        .portfolio-item:nth-child(5) { animation-delay: 0.5s; }
        .portfolio-item:nth-child(6) { animation-delay: 0.6s; }
        .portfolio-item:nth-child(7) { animation-delay: 0.7s; }
        .portfolio-item:nth-child(8) { animation-delay: 0.8s; }

        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .portfolio-item:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            z-index: 10;
        }

        .portfolio-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .portfolio-item:hover .portfolio-image {
            transform: scale(1.1);
        }

        .portfolio-footer {
            text-align: center;
            padding: 40px 0 60px;
        }

        .portfolio-subtitle {
            font-size: 28px;
            font-weight: 600;
            color: #3d1f1a;
            letter-spacing: 1.5px;
        }

        .wave-divider {
            position: relative;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            margin-top: -1px;
        }

        .wave-divider svg {
            position: relative;
            display: block;
            width: 100%;
            height: 150px;
        }

        @media (max-width: 1200px) {
            .portfolio-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 968px) {
            .portfolio {
                padding: 60px 30px 0;
            }

            .portfolio-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .portfolio-title {
                font-size: 28px;
            }

            .title-line {
                width: 100%;
            }

            .portfolio-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .portfolio-subtitle {
                font-size: 20px;
            }

            .wave-divider svg {
                height: 80px;
            }
        }

        @media (max-width: 580px) {
            .portfolio-grid {
                grid-template-columns: 1fr;
            }
        }

        /* TGIF Section Styles */
        .tgif-section {
            background: linear-gradient(180deg, #e8b4a0 0%, #f0c4b0 100%);
            padding: 80px 60px 0;
            position: relative;
        }

        .tgif-header {
            display: flex;
            align-items: center;
            gap: 30px;
            margin-bottom: 50px;
            animation: fadeIn 0.8s ease-out;
        }

        .tgif-title {
            font-size: 36px;
            font-weight: 700;
            color: #3d1f1a;
            letter-spacing: 2px;
            white-space: nowrap;
        }

        .tgif-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-bottom: 50px;
        }

        .tgif-item {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            aspect-ratio: 1;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            animation: fadeInScale 0.6s ease-out backwards;
        }

        .tgif-item:nth-child(1) { animation-delay: 0.1s; }
        .tgif-item:nth-child(2) { animation-delay: 0.2s; }
        .tgif-item:nth-child(3) { animation-delay: 0.3s; }
        .tgif-item:nth-child(4) { animation-delay: 0.4s; }
        .tgif-item:nth-child(5) { animation-delay: 0.5s; }
        .tgif-item:nth-child(6) { animation-delay: 0.6s; }
        .tgif-item:nth-child(7) { animation-delay: 0.7s; }
        .tgif-item:nth-child(8) { animation-delay: 0.8s; }

        .tgif-item:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            z-index: 10;
        }

        .tgif-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .tgif-item:hover .tgif-image {
            transform: scale(1.1);
        }

        .tgif-footer {
            text-align: center;
            padding: 40px 0 60px;
        }

        .tgif-subtitle {
            font-size: 28px;
            font-weight: 600;
            color: #3d1f1a;
            letter-spacing: 1.5px;
        }

        .wave-brown {
            margin-top: -1px;
        }

        @media (max-width: 1200px) {
            .tgif-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 968px) {
            .tgif-section {
                padding: 60px 30px 0;
            }

            .tgif-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .tgif-title {
                font-size: 28px;
            }

            .tgif-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .tgif-subtitle {
                font-size: 20px;
            }
        }

        @media (max-width: 580px) {
            .tgif-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Event Section Styles */
        .event-section {
            background: linear-gradient(180deg, #e8b4a0 0%, #f0c4b0 100%);
            padding: 80px 60px 0;
            position: relative;
        }

        .event-header {
            display: flex;
            align-items: center;
            gap: 30px;
            margin-bottom: 50px;
            animation: fadeIn 0.8s ease-out;
        }

        .event-title {
            font-size: 36px;
            font-weight: 700;
            color: #3d1f1a;
            letter-spacing: 2px;
            white-space: nowrap;
        }

        .event-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-bottom: 50px;
        }

        .event-item {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            aspect-ratio: 1;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            animation: fadeInScale 0.6s ease-out backwards;
        }

        .event-item:nth-child(1) { animation-delay: 0.1s; }
        .event-item:nth-child(2) { animation-delay: 0.2s; }
        .event-item:nth-child(3) { animation-delay: 0.3s; }
        .event-item:nth-child(4) { animation-delay: 0.4s; }
        .event-item:nth-child(5) { animation-delay: 0.5s; }
        .event-item:nth-child(6) { animation-delay: 0.6s; }
        .event-item:nth-child(7) { animation-delay: 0.7s; }
        .event-item:nth-child(8) { animation-delay: 0.8s; }

        .event-item:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            z-index: 10;
        }

        .event-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .event-item:hover .event-image {
            transform: scale(1.1);
        }

        .event-footer {
            text-align: center;
            padding: 40px 0 60px;
        }

        .event-subtitle {
            font-size: 28px;
            font-weight: 600;
            color: #3d1f1a;
            letter-spacing: 1.5px;
        }

        @media (max-width: 1200px) {
            .event-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 968px) {
            .event-section {
                padding: 60px 30px 0;
            }

            .event-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .event-title {
                font-size: 28px;
            }

            .event-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .event-subtitle {
                font-size: 20px;
            }
        }

        @media (max-width: 580px) {
            .event-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Other Flyer Section Styles */
        .other-section {
            background: linear-gradient(180deg, #e8b4a0 0%, #f0c4b0 100%);
            padding: 80px 60px 0;
            position: relative;
        }

        .other-header {
            display: flex;
            align-items: center;
            gap: 30px;
            margin-bottom: 50px;
            animation: fadeIn 0.8s ease-out;
        }

        .other-title {
            font-size: 36px;
            font-weight: 700;
            color: #3d1f1a;
            letter-spacing: 2px;
            white-space: nowrap;
        }

        .other-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-bottom: 50px;
        }

        .other-item {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            aspect-ratio: 1;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            animation: fadeInScale 0.6s ease-out backwards;
        }

        .other-item:nth-child(1) { animation-delay: 0.1s; }
        .other-item:nth-child(2) { animation-delay: 0.2s; }
        .other-item:nth-child(3) { animation-delay: 0.3s; }
        .other-item:nth-child(4) { animation-delay: 0.4s; }
        .other-item:nth-child(5) { animation-delay: 0.5s; }
        .other-item:nth-child(6) { animation-delay: 0.6s; }
        .other-item:nth-child(7) { animation-delay: 0.7s; }
        .other-item:nth-child(8) { animation-delay: 0.8s; }

        .other-item:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            z-index: 10;
        }

        .other-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .other-item:hover .other-image {
            transform: scale(1.1);
        }

        .other-footer {
            text-align: center;
            padding: 40px 0 60px;
        }

        .other-subtitle {
            font-size: 28px;
            font-weight: 600;
            color: #3d1f1a;
            letter-spacing: 1.5px;
        }

        @media (max-width: 1200px) {
            .other-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 968px) {
            .other-section {
                padding: 60px 30px 0;
            }

            .other-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .other-title {
                font-size: 28px;
            }

            .other-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .other-subtitle {
                font-size: 20px;
            }
        }

        @media (max-width: 580px) {
            .other-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Logofolio Section Styles */
        .logofolio-section {
            background: linear-gradient(180deg, #e8b4a0 0%, #f0c4b0 100%);
            padding: 80px 60px 0;
            position: relative;
        }

        .logofolio-header {
            display: flex;
            align-items: center;
            gap: 30px;
            margin-bottom: 50px;
            animation: fadeIn 0.8s ease-out;
        }

        .logofolio-title {
            font-size: 36px;
            font-weight: 700;
            color: #3d1f1a;
            letter-spacing: 2px;
            white-space: nowrap;
        }

        .logofolio-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-bottom: 50px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .logofolio-item {
            position: relative;
            cursor: pointer;
            transition: all 0.4s ease;
            animation: fadeInScale 0.6s ease-out backwards;
        }

        .logofolio-item:nth-child(1) { animation-delay: 0.1s; }
        .logofolio-item:nth-child(2) { animation-delay: 0.2s; }
        .logofolio-item:nth-child(3) { animation-delay: 0.3s; }
        .logofolio-item:nth-child(4) { animation-delay: 0.4s; }
        .logofolio-item:nth-child(5) { animation-delay: 0.5s; }
        .logofolio-item:nth-child(6) { animation-delay: 0.6s; }
        .logofolio-item:nth-child(7) { animation-delay: 0.7s; }
        .logofolio-item:nth-child(8) { animation-delay: 0.8s; }

        .logo-display {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            aspect-ratio: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .logofolio-item:hover .logo-display {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }

        .logofolio-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
            transition: transform 0.4s ease;
            filter: brightness(0) saturate(100%);
        }

        .logofolio-item:hover .logofolio-image {
            transform: scale(1.1);
        }

        .logofolio-footer {
            text-align: center;
            padding: 40px 0 60px;
        }

        .logofolio-subtitle {
            font-size: 28px;
            font-weight: 600;
            color: #3d1f1a;
            letter-spacing: 1.5px;
        }

        @media (max-width: 1200px) {
            .logofolio-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 968px) {
            .logofolio-section {
                padding: 60px 30px 0;
            }

            .logofolio-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .logofolio-title {
                font-size: 28px;
            }

            .logofolio-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }

            .logo-display {
                padding: 30px;
            }

            .logofolio-subtitle {
                font-size: 20px;
            }
        }

        @media (max-width: 580px) {
            .logofolio-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .logo-display {
                padding: 20px;
            }
        }

        /* Reviews Section Styles */
        .reviews-section {
            background: linear-gradient(135deg, #3d1f1a 0%, #5c2f24 100%);
            padding: 80px 60px 0;
            position: relative;
        }

        .reviews-header {
            display: flex;
            align-items: center;
            gap: 30px;
            margin-bottom: 60px;
            animation: fadeIn 0.8s ease-out;
        }

        .reviews-title {
            font-size: 36px;
            font-weight: 700;
            color: white;
            letter-spacing: 2px;
            white-space: nowrap;
        }

        .title-line-white {
            flex: 1;
            height: 2px;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.5) 0%, transparent 100%);
        }

        .reviews-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto 60px;
        }

        .reviews-left,
        .reviews-right {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .review-bubble {
            border-radius: 18px;
            padding: 20px 24px;
            position: relative;
            animation: fadeInUp 0.6s ease-out backwards;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
        }

        .reviews-left .review-bubble:nth-child(1) { animation-delay: 0.1s; }
        .reviews-left .review-bubble:nth-child(2) { animation-delay: 0.3s; }
        .reviews-left .review-bubble:nth-child(3) { animation-delay: 0.5s; }
        .reviews-right .review-bubble:nth-child(1) { animation-delay: 0.2s; }

        .bubble-green {
            background: rgba(40, 90, 70, 0.8);
            border: 1.5px solid rgba(100, 200, 150, 0.3);
        }

        .bubble-teal {
            background: rgba(30, 70, 80, 0.8);
            border: 1.5px solid rgba(70, 150, 170, 0.3);
        }

        .bubble-gray {
            background: rgba(50, 50, 60, 0.8);
            border: 1.5px solid rgba(120, 120, 140, 0.3);
        }

        .bubble-orange {
            background: rgba(90, 50, 40, 0.8);
            border: 1.5px solid rgba(200, 100, 70, 0.3);
        }

        .bubble-header {
            font-weight: 600;
            font-size: 15px;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 8px;
        }

        .bubble-sender {
            font-weight: 600;
            font-size: 14px;
            color: #4ade80;
            margin-bottom: 8px;
        }

        .bubble-content {
            color: rgba(255, 255, 255, 0.95);
            font-size: 15px;
            line-height: 1.5;
            margin-bottom: 8px;
        }

        .bubble-content-2 {
            color: rgba(255, 255, 255, 0.95);
            font-size: 15px;
            line-height: 1.5;
            margin-top: 12px;
            margin-bottom: 8px;
        }

        .bubble-time {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.5);
            text-align: right;
        }

        .satisfied-badge {
            background: linear-gradient(135deg, #ff8c42 0%, #ff6b35 100%);
            border-radius: 50%;
            width: 180px;
            height: 180px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 40px auto 0;
            box-shadow: 0 15px 40px rgba(255, 107, 53, 0.4);
            animation: pulse 2s infinite;
            position: relative;
        }

        .satisfied-badge::before {
            content: '';
            position: absolute;
            inset: -8px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ff8c42 0%, #ff6b35 100%);
            opacity: 0.3;
            z-index: -1;
        }

        .badge-number {
            font-size: 48px;
            font-weight: 800;
            color: white;
            line-height: 1;
        }

        .badge-text {
            font-size: 16px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.95);
            text-align: center;
            margin-top: 8px;
            line-height: 1.2;
        }

        .reviews-footer {
            text-align: center;
            padding: 40px 0 60px;
        }

        .reviews-subtitle {
            font-size: 28px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.9);
            letter-spacing: 1.5px;
        }

        @media (max-width: 968px) {
            .reviews-section {
                padding: 60px 30px 0;
            }

            .reviews-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .reviews-title {
                font-size: 28px;
            }

            .title-line-white {
                width: 100%;
            }

            .reviews-container {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            .satisfied-badge {
                width: 150px;
                height: 150px;
            }

            .badge-number {
                font-size: 40px;
            }

            .badge-text {
                font-size: 14px;
            }

            .reviews-subtitle {
                font-size: 20px;
            }
        }

        /* Contact Section Styles */
        .contact-section {
            background: linear-gradient(135deg, #3d1f1a 0%, #4a1f18 100%);
            padding: 80px 60px 0;
            position: relative;
        }

        .contact-container {
            display: flex;
            align-items: center;
            gap: 60px;
            max-width: 1200px;
            margin: 0 auto 60px;
        }

        .contact-left {
            flex: 0 0 300px;
            animation: fadeInLeft 0.8s ease-out;
        }

        .contact-profile {
            position: relative;
            width: 280px;
            height: 280px;
        }

        .contact-image {
            width: 100%;
            height: 100%;
            border-radius: 35px;
            object-fit: cover;
            border: 5px solid #ff8c42;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        }

        .profile-badge {
            position: absolute;
            top: -15px;
            right: -15px;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #ff8c42 0%, #ff6b35 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 24px rgba(255, 107, 53, 0.5);
            animation: pulse 2s infinite;
        }

        .contact-right {
            flex: 1;
            animation: fadeInRight 0.8s ease-out;
        }

        .contact-header {
            margin-bottom: 20px;
        }

        .contact-title {
            font-size: 32px;
            font-weight: 700;
            color: white;
            background: linear-gradient(135deg, #ff8c42 0%, #ffb347 100%);
            display: inline-block;
            padding: 12px 28px;
            border-radius: 12px;
            letter-spacing: 2px;
        }

        .contact-name {
            font-size: 28px;
            font-weight: 600;
            color: white;
            margin-bottom: 30px;
        }

        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
            text-decoration: none;
            color: rgba(255, 255, 255, 0.9);
            font-size: 16px;
            transition: all 0.3s ease;
            padding: 8px 0;
        }

        .contact-item:hover {
            color: #ff8c42;
            transform: translateX(10px);
        }

        .contact-icon {
            width: 24px;
            height: 24px;
            flex-shrink: 0;
        }

        .contact-item:hover .contact-icon {
            transform: scale(1.2);
        }

        .contact-text {
            font-weight: 500;
        }

        .contact-footer {
            text-align: center;
            padding: 40px 0 60px;
        }

        .contact-subtitle {
            font-size: 28px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.9);
            letter-spacing: 1.5px;
        }

        @media (max-width: 968px) {
            .contact-section {
                padding: 60px 30px 0;
            }

            .contact-container {
                flex-direction: column;
                gap: 40px;
                text-align: center;
            }

            .contact-left {
                flex: 0 0 auto;
            }

            .contact-profile {
                width: 240px;
                height: 240px;
                margin: 0 auto;
            }

            .contact-title {
                font-size: 28px;
            }

            .contact-name {
                font-size: 24px;
            }

            .contact-details {
                align-items: center;
            }

            .contact-item {
                justify-content: center;
            }

            .contact-subtitle {
                font-size: 20px;
            }
        }

        /* Footer Section Styles */
        .footer-section {
            background: linear-gradient(135deg, #c4715e 0%, #a85f4f 100%);
            padding: 0 60px 40px;
            position: relative;
        }

        .footer-wave {
            width: 100%;
            overflow: hidden;
            line-height: 0;
            margin-bottom: 30px;
        }

        .footer-wave svg {
            position: relative;
            display: block;
            width: 100%;
            height: 80px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }

        .footer-left {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .footer-copyright {
            font-size: 16px;
            font-weight: 600;
            color: white;
        }

        .footer-tagline {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.8);
        }

        .footer-socials {
            display: flex;
            gap: 20px;
        }

        .footer-social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .footer-social-link:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-5px);
        }

        .footer-social-link svg {
            width: 20px;
            height: 20px;
        }

        @media (max-width: 968px) {
            .footer-section {
                padding: 30px 30px;
            }

            .footer-content {
                flex-direction: column;
                gap: 25px;
                text-align: center;
            }

            .footer-left {
                align-items: center;
            }
        }


        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 50px;
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .welcome-badge {
            display: inline-block;
            background: linear-gradient(135deg, #ff8c42 0%, #ff6b35 100%);
            padding: 12px 28px;
            border-radius: 25px;
            font-size: 13px;
            letter-spacing: 1px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(255, 140, 66, 0.4);
        }

        .section-title {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 15px;
            background: linear-gradient(135deg, #ff8c42 0%, #ffb347 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-subtitle {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 10px;
        }

        .intro-text {
            font-size: 15px;
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 30px;
            padding: 50px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 140, 66, 0.2);
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-section {
            margin-bottom: 40px;
        }

        .form-section h3 {
            font-size: 24px;
            color: #ff8c42;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid rgba(255, 140, 66, 0.3);
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            font-size: 15px;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 10px;
            font-weight: 500;
        }

        label .required {
            color: #ff6b35;
            margin-left: 3px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="time"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 14px 18px;
            border-radius: 12px;
            border: 2px solid rgba(255, 140, 66, 0.3);
            background: rgba(255, 255, 255, 0.08);
            color: white;
            font-size: 15px;
            font-family: inherit;
            transition: all 0.3s ease;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #ff8c42;
            background: rgba(255, 255, 255, 0.12);
            box-shadow: 0 0 0 4px rgba(255, 140, 66, 0.1);
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23ff8c42' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 15px center;
            padding-right: 40px;
        }

        select[multiple] {
            min-height: 120px;
            background-image: none;
            padding-right: 18px;
        }

        option {
            background: #3d1f1a;
            padding: 10px;
        }

        .radio-group,
        .checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .radio-option,
        .checkbox-option {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.05);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .radio-option:hover,
        .checkbox-option:hover {
            background: rgba(255, 140, 66, 0.1);
        }

        input[type="radio"],
        input[type="checkbox"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
            accent-color: #ff8c42;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 15px;
            background: rgba(255, 140, 66, 0.1);
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .checkbox-label:hover {
            background: rgba(255, 140, 66, 0.15);
        }

        .checkbox-label input[type="checkbox"] {
            margin: 0;
        }

        .submit-btn {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, #ff8c42 0%, #ff6b35 100%);
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(255, 107, 53, 0.4);
            margin-top: 30px;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(255, 107, 53, 0.5);
        }

        .submit-btn:active {
            transform: translateY(-1px);
        }

        .helper-text {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.6);
            margin-top: 6px;
            font-style: italic;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 15px;
        }

        .service-card {
            padding: 15px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            border: 2px solid transparent;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .service-card:hover {
            border-color: rgba(255, 140, 66, 0.5);
            background: rgba(255, 140, 66, 0.1);
        }

        .service-card input[type="checkbox"] {
            margin-right: 10px;
        }

        @media (max-width: 768px) {
            body {
                padding: 20px 15px;
            }

            .form-container {
                padding: 30px 20px;
            }

            .section-title {
                font-size: 36px;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{url('/')}}" style="text-decoration:none;echo "# portfolio" >> README.md"><div class="logo">Home</div></a>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#clients">Clients Testimonials</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="{{url('/form')}}" class="book-btn">Book Appointment</a></li>
        </ul>
    </nav>
@yield('content')
</body>
</html>