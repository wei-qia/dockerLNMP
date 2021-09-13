# docker构建php LNMP环境 

### 项目说明

基于docker搭建的LNMP运行环境，compose一件生成运行环境，本项目支持运行于linux，windows，mac等系统，需要修改yml文件中挂载目录为自己本机的目录。

### 使用说明

```
1.安装docker及docker compose
2.git到本地 
3.修改yml文件中挂载目录。windows，linux，mac根据自己要求修改自己本地的目录挂载。
4.cmd运行docker-compose up --build
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