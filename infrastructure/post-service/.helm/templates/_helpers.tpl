{{- define ".helm.fullname" -}}
{{- .Values.image.repository }}-{{ .Values.image.tag }}
{{- end }}

{{/*
Selector labels
*/}}
{{- define ".helm.selectorLabels" -}}
version: {{ .Values.image.tag }}
app: {{ .Values.image.repository }}
{{- end }}
