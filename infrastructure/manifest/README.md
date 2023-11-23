Docker build

```sh
docker build -t app:v1 .
```

Minikube start

```sh
minikube start
```

Minikube build

```sh
minikube image build -t app .
```

```
kubectl port-forward svc/kiali 20001:20001 -n istio-system
```


