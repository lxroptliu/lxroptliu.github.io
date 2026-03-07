<?php
// 个性化配置变量 —— 只需修改此处即可全局更新内容
$pageTitle   = '软斯箜 · Ruansik';
$nameCN      = '软斯箜';
$nameEN      = 'Ruansik';
$bio         = '让我们的网站，成为世界的一束光';
$avatarUrl   = 'https://image2url.com/r2/default/images/1772362788507-461e55e4-2975-40fa-bbb2-9f657ef1ea06.jpg';
$bilibiliUrl = 'https://m.bilibili.com/space/1606715615';
$githubUrl   = 'https://github.com/lxroptliu';
$copyright   = '2026 软斯箜 Ruansik';  // 可包含年份和名称
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>
  <!-- Font Awesome 6 (免费图标库) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    /* ========= 绿蓝渐变色主题 · 字体美学优化 ========= */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* 主题切换变量 —— 默认深色模式 */
    :root {
      --bg-gradient-start: #0a2b26;
      --bg-gradient-end: #052034;
      --card-gradient-start: rgba(28, 80, 70, 0.9);
      --card-gradient-end: rgba(20, 65, 90, 0.95);
      --card-border-glow: rgba(90, 230, 200, 0.2);
      --text-primary: #ffffff;
      --text-secondary: #c0f7f0;
      --text-bio: #e2fff5;
      --divider-gradient: #3fe0b0, #40b0e0, #3fe0b0;
      --btn-gradient-start: #2fcb9a;
      --btn-gradient-end: #208ac0;
      --btn-hover-start: #3fe0b0;
      --btn-hover-end: #30a2da;
      --footer-border: rgba(90, 210, 180, 0.35);
      --footer-text: #bee9e2;
      --avatar-border: #40dfb5;
      --avatar-shadow: rgba(0, 100, 80, 0.5);
      --card-bg-solid: transparent;
    }

    /* 浅色模式 —— 明亮的绿蓝调性 */
    body.light-mode {
      --bg-gradient-start: #d4f3ec;
      --bg-gradient-end: #b0e0fa;
      --card-gradient-start: rgba(240, 255, 250, 0.85);
      --card-gradient-end: rgba(220, 245, 255, 0.9);
      --card-border-glow: rgba(0, 120, 140, 0.3);
      --text-primary: #04332c;
      --text-secondary: #0b4f5c;
      --text-bio: #02504a;
      --divider-gradient: #1fa080, #1a7fb0, #1fa080;
      --btn-gradient-start: #1f9f7a;
      --btn-gradient-end: #1b74a0;
      --btn-hover-start: #2db98b;
      --btn-hover-end: #2c8fc2;
      --footer-border: rgba(20, 90, 100, 0.35);
      --footer-text: #044d4d;
      --avatar-border: #1f8f72;
      --avatar-shadow: rgba(0, 90, 80, 0.4);
      --card-bg-solid: transparent;
    }

    body {
      background: linear-gradient(145deg, var(--bg-gradient-start) 0%, var(--bg-gradient-end) 100%);
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
      line-height: 1.5;
      color: var(--text-primary);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1.5rem;
      transition: background 0.3s ease, color 0.2s ease;
    }

    /* 主卡片 */
    .card {
      max-width: 640px;
      width: 100%;
      background: linear-gradient(135deg, var(--card-gradient-start) 0%, var(--card-gradient-end) 100%);
      backdrop-filter: blur(2px);
      border-radius: 40px;
      padding: 3.2rem 2.8rem;
      box-shadow: 0 25px 40px -10px rgba(0, 30, 25, 0.8), 0 0 0 1px var(--card-border-glow) inset;
      transition: all 0.25s ease, background 0.3s ease;
      text-align: center;
      border: 1px solid var(--card-border-glow);
      position: relative;
    }

    /* 头像 */
    .avatar {
      width: 120px;
      height: 120px;
      margin: 0 auto 1.6rem auto;
      border-radius: 50%;
      overflow: hidden;
      border: 3px solid var(--avatar-border);
      background: #1c5548;
      box-shadow: 0 8px 20px var(--avatar-shadow);
      transition: transform 0.2s, border-color 0.2s, box-shadow 0.2s;
    }

    .avatar:hover {
      transform: scale(1.02);
      border-color: #8cffe5;
      box-shadow: 0 10px 28px rgba(0, 150, 120, 0.7);
    }

    .avatar img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
      color: transparent;
    }

    /* 中文名 */
    .name-cn {
      font-size: 3.5rem;
      font-weight: 400;
      letter-spacing: 3px;
      margin: 0 0 0.15rem 0;
      color: var(--text-primary);
      line-height: 1.15;
      text-shadow: 0 2px 10px rgba(0, 150, 130, 0.5);
      font-family: 'SF Pro Display', 'Segoe UI', 'PingFang SC', 'Microsoft YaHei', sans-serif;
      transition: color 0.2s;
    }

    /* 英文名 */
    .name-en {
      font-size: 1.8rem;
      font-weight: 300;
      color: var(--text-secondary);
      margin: 0 0 0.3rem 0;
      letter-spacing: 2px;
      word-break: break-word;
      text-shadow: 0 1px 8px rgba(0, 80, 70, 0.6);
      font-family: 'Inter', 'Segoe UI', 'Poppins', sans-serif;
      transition: color 0.2s;
    }

    /* 分割线 */
    .divider {
      width: 80px;
      height: 3px;
      background: linear-gradient(90deg, var(--divider-gradient));
      margin: 1.6rem auto 1.5rem auto;
      border-radius: 4px;
      opacity: 0.9;
      box-shadow: 0 0 6px #3fe0b0;
    }

    /* 描述文字 */
    .bio {
      font-size: 1.3rem;
      color: var(--text-bio);
      margin: 0 0 2.2rem 0;
      font-weight: 350;
      letter-spacing: 0.5px;
      text-shadow: 0 2px 6px rgba(0, 40, 30, 0.4);
      font-family: 'Inter', 'system-ui', 'Helvetica Neue', sans-serif;
      transition: color 0.2s;
    }

    /* 双按钮容器 */
    .link-group {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      gap: 1.2rem;
      margin: 2rem 0 2rem 0;
    }

    /* 社交按钮样式 */
    .social-link {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      background: linear-gradient(125deg, var(--btn-gradient-start), var(--btn-gradient-end));
      padding: 0.9rem 2rem;
      border-radius: 60px;
      text-decoration: none;
      color: white;
      font-size: 1.3rem;
      font-weight: 420;
      border: none;
      transition: all 0.25s ease, background 0.3s ease;
      box-shadow: 0 8px 18px rgba(0, 70, 60, 0.5), 0 1px 2px rgba(255, 255, 255, 0.3) inset;
      letter-spacing: 0.6px;
      min-width: 200px;
      backdrop-filter: blur(2px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .social-link i {
      font-size: 2rem;
      color: white;
      transition: transform 0.2s, filter 0.2s;
    }

    .social-link:hover {
      background: linear-gradient(125deg, var(--btn-hover-start), var(--btn-hover-end));
      transform: translateY(-4px);
      box-shadow: 0 16px 26px rgba(0, 120, 100, 0.7), 0 1px 4px rgba(255, 255, 255, 0.4) inset;
    }

    .social-link:hover i {
      transform: scale(1.06);
      filter: drop-shadow(0 0 4px #befff0);
    }

    .social-link:active {
      transform: translateY(-1px);
      box-shadow: 0 6px 14px rgba(0, 70, 55, 0.7);
    }

    /* 单个主题切换按钮 (右上角) */
    .theme-toggle {
      display: flex;
      justify-content: flex-end;
      margin-bottom: 1.5rem;
    }

    .theme-toggle-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(160, 240, 220, 0.4);
      border-radius: 40px;
      width: 52px;
      height: 52px;
      cursor: pointer;
      color: var(--text-secondary);
      font-size: 1.7rem;
      transition: all 0.2s ease;
      box-shadow: 0 4px 14px rgba(0, 30, 20, 0.4);
      padding: 0;
      line-height: 1;
      outline: none;
    }

    .theme-toggle-btn:hover {
      background: rgba(255, 255, 255, 0.3);
      transform: scale(1.06);
      box-shadow: 0 6px 18px rgba(0, 140, 120, 0.5);
    }

    .theme-toggle-btn:active {
      transform: scale(0.98);
    }

    .theme-toggle-btn:focus-visible {
      outline: 2px solid #40dfb5;
      outline-offset: 4px;
    }

    /* 浅色模式下的按钮专属样式 */
    body.light-mode .theme-toggle-btn {
      background: rgba(0, 0, 0, 0.06);
      border-color: rgba(20, 90, 100, 0.3);
      color: #04332c;
      box-shadow: 0 4px 12px rgba(0, 50, 40, 0.15);
    }

    body.light-mode .theme-toggle-btn:hover {
      background: rgba(0, 0, 0, 0.12);
    }

    /* 页脚 */
    .footer {
      font-size: 0.95rem;
      color: var(--footer-text);
      margin-top: 2.6rem;
      letter-spacing: 0.8px;
      font-weight: 340;
      border-top: 1px solid var(--footer-border);
      padding-top: 1.8rem;
      font-family: 'Inter', 'SF Mono', monospace;
      transition: color 0.2s, border-color 0.2s;
    }

    /* 手机版优化 */
    @media (max-width: 550px) {
      .card {
        padding: 2.2rem 1.5rem;
        border-radius: 32px;
      }

      .avatar {
        width: 100px;
        height: 100px;
        margin-bottom: 1.3rem;
        border-width: 2px;
      }

      .name-cn {
        font-size: 2.8rem;
        letter-spacing: 2px;
      }

      .name-en {
        font-size: 1.5rem;
        letter-spacing: 1.2px;
      }

      .bio {
        font-size: 1.15rem;
        margin-bottom: 1.8rem;
      }

      .link-group {
        flex-direction: column;
        gap: 1rem;
        margin: 1.5rem 0;
      }

      .social-link {
        width: 100%;
        padding: 0.9rem 1.5rem;
        font-size: 1.25rem;
        min-width: unset;
      }

      .social-link i {
        font-size: 1.8rem;
      }

      .footer {
        margin-top: 2rem;
        padding-top: 1.4rem;
      }

      .theme-toggle {
        margin-bottom: 1rem;
      }
      .theme-toggle-btn {
        width: 44px;
        height: 44px;
        font-size: 1.5rem;
      }
    }

    /* 焦点状态保留 */
    .avatar:focus-within {
      outline: 2px solid #6ff0d0;
      outline-offset: 6px;
    }

    .social-link:focus-visible {
      outline: 2px solid #a0ffda;
      outline-offset: 4px;
      background: linear-gradient(125deg, #1fba88, #197bb0);
    }
  </style>
</head>
<body>
  <div class="card">
    <!-- 单个主题切换按钮 · 右上角 -->
    <div class="theme-toggle">
      <button id="themeToggleBtn" class="theme-toggle-btn" aria-label="切换深色/浅色模式" title="切换主题">
        <i class="fas fa-moon"></i>   <!-- JS会根据当前主题更新 -->
      </button>
    </div>

    <!-- 头像 -->
    <div class="avatar" aria-label="软斯箜头像">
      <img src="<?= htmlspecialchars($avatarUrl) ?>" 
           alt="<?= htmlspecialchars($nameCN) ?>的头像" 
           title="<?= htmlspecialchars($nameCN) ?> · <?= htmlspecialchars($nameEN) ?>">
    </div>

    <!-- 姓名 -->
    <h1 class="name-cn"><?= htmlspecialchars($nameCN) ?></h1>
    <p class="name-en"><?= htmlspecialchars($nameEN) ?></p>

    <!-- 渐变分割线 -->
    <div class="divider" role="presentation"></div>

    <!-- 描述语 -->
    <p class="bio"><?= htmlspecialchars($bio) ?></p>

    <!-- 双按钮容器 -->
    <div class="link-group">
      <!-- 哔哩哔哩按钮 -->
      <a href="<?= htmlspecialchars($bilibiliUrl) ?>" class="social-link" target="_blank" rel="noopener noreferrer" title="哔哩哔哩 · <?= htmlspecialchars($nameCN) ?>">
        <i class="fab fa-bilibili"></i>
        <span>哔哩哔哩</span>
      </a>

      <!-- GitHub 按钮 -->
      <a href="<?= htmlspecialchars($githubUrl) ?>" class="social-link github-link" target="_blank" rel="noopener noreferrer" title="GitHub · <?= htmlspecialchars($nameEN) ?>">
        <i class="fab fa-github"></i>
        <span>GitHub</span>
      </a>
    </div>

    <!-- 页脚版权 -->
    <div class="footer">
      © <?= htmlspecialchars($copyright) ?>
    </div>
  </div>

  <!-- 轻量切换脚本 — 单个按钮控制深色/浅色 -->
  <script>
    (function() {
      const toggleBtn = document.getElementById('themeToggleBtn');
      const icon = toggleBtn.querySelector('i');
      const body = document.body;

      // 根据模式设置body类和图标
      function setTheme(mode) {
        if (mode === 'light') {
          body.classList.add('light-mode');
          icon.className = 'fas fa-sun';   // 太阳表示浅色
          localStorage.setItem('ruansik-theme', 'light');
        } else {
          body.classList.remove('light-mode');
          icon.className = 'fas fa-moon';   // 月亮表示深色
          localStorage.setItem('ruansik-theme', 'dark');
        }
      }

      // 初始化：读取本地存储，如果没有则默认深色
      const savedTheme = localStorage.getItem('ruansik-theme');
      if (savedTheme === 'light') {
        setTheme('light');
      } else {
        setTheme('dark'); // 默认深色（包括无存储或为'dark'的情况）
      }

      // 点击按钮：切换主题
      toggleBtn.addEventListener('click', function() {
        if (body.classList.contains('light-mode')) {
          setTheme('dark');
        } else {
          setTheme('light');
        }
      });
    })();
  </script>
</body>
</html>