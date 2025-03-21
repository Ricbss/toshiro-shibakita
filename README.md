## Docker: Utilização Prática no Cenário de Microsserviços
### Instrutor: Denilson Bonatti - Digital Innovation One

---

### 📖 Descrição
O uso de containers com Docker está transformando o desenvolvimento de software, especialmente no cenário de microsserviços. Eles permitem a criação de ambientes isolados, consistentes e escaláveis, facilitando o gerenciamento e a implantação de aplicações distribuídas.

Neste projeto prático, o Expert Instructor Denilson Bonatti explora como o Docker pode ser aplicado no desenvolvimento de microsserviços, utilizando conceitos fundamentais e exemplos reais aplicáveis no dia a dia.

---

### ✨ O que você aprenderá
✅ Conceito de containers e sua aplicação em microsserviços.
✅ Criação e configuração de containers com Docker.
✅ Orquestração de microsserviços usando Docker Compose.
✅ Integração com serviços AWS (opcional).
✅ Melhores práticas na construção de Dockerfiles e Docker Compose.

---

### 📋 Pré-requisitos
- Conhecimentos básicos em:
  - Linux
  - Docker
  - AWS

---

### 🚀 Como executar o projeto
1. **Clone o repositório:**
```bash
 git clone <URL-do-repositorio>
```
2. **Navegue até o diretório do projeto:**
```bash
 cd Projeto-Microsservicos
```
3. **Construa e execute os containers:**
```bash
 docker-compose up --build
```
4. **Acesse os serviços:**
  - Service A (Node.js): `http://localhost:3000`
  - Service B (Python): `http://localhost:5000`

---

### 🌩️ Deploy na AWS (Opcional)
Para implementar na AWS, siga os passos:
- Configure um repositório no **Amazon ECR (Elastic Container Registry)**.
- Implemente o projeto usando o **Amazon ECS (Elastic Container Service)** ou **AWS Fargate**.
- Configure permissões e variáveis de ambiente conforme necessário.


---

### 📄 Licença
Este projeto é licenciado sob a MIT License. Sinta-se à vontade para usar e modificar conforme desejar!



