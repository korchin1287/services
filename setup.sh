minikube start --disk-size 5GB

eval $(minikube -p minikube docker-env)

# Делаем metallb
minikube addons enable metallb
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/namespace.yaml
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/metallb.yaml
kubectl create secret generic -n metallb-system memberlist --from-literal=secretkey="$(openssl rand -base64 128)"
kubectl apply -f ./srcs/metallb.yaml

# Собираем контейнеры
docker build -t ftps ./srcs/ftps
docker build -t grafana ./srcs/grafana
docker build -t influxdb ./srcs/influxdb
docker build -t mysql ./srcs/mysql/
docker build -t nginx ./srcs/nginx/
docker build -t phpmyadmin ./srcs/phpmyadmin/
docker build -t telegraf ./srcs/telegraf
docker build -t wordpress ./srcs/wordpress/

# Запускаем yaml файлы
kubectl apply -f ./srcs/volume.yaml
kubectl apply -f ./srcs/ftps/ftps.yaml
kubectl apply -f ./srcs/grafana/grafana.yaml
kubectl apply -f ./srcs/influxdb/influxdb-conf.yaml
kubectl apply -f ./srcs/influxdb/influxdb.yaml
kubectl apply -f ./srcs/mysql/mysql.yaml
kubectl apply -f ./srcs/nginx/nginx.yaml
kubectl apply -f ./srcs/phpmyadmin/phpmyadmin.yaml
kubectl apply -f ./srcs/telegraf/telegraf.yaml
kubectl apply -f ./srcs/wordpress/wordpress.yaml

minikube dashboard
