# docker构建php LNMP环境 

```
1.git到本地 
2.cmd运行docker-compose up --build
```

### 目录结构

- html                                             # 项目根目录
- mysql                                           # mysql目录 包含mysql数据
- nginx                                            # nginx目录
  - nginx.conf                            # nginx配置文件
- php                                               # php目录
  - Dockerfile                             # phpdockerfile文件 构建php镜像并添加部分扩展 
- redis
- docker-compose.yml