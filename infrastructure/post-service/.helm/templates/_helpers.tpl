{{- define ".helm.fullname" -}}
{{- .Chart.Name | trimSuffix "-" }}
{{- end }}

{{/*
Selector labels
*/}}
{{- define ".helm.selectorLabels" -}}
app: {{ printf "%s-%s" .Chart.Name .Chart.Version | replace "+" "_" | trunc 63 | trimSuffix "-" }}
{{- end }}
